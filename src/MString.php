<?php
namespace MenyongMenying\MLibrary\Kucil\Utilities\MString;

use MenyongMenying\MLibrary\Kucil\Utilities\MString\Contracts\MStringInterface;
use MenyongMenying\MLibrary\Kucil\Utilities\MString\Enums\ConvertToArrayTypes;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-20
 */
final class MString implements MStringInterface
{
    public function isString(mixed $string) :null|bool
    {
        return is_string($string);
    }

    public function isWhitespaceOnly(string $string) :null|bool
    {
        return preg_match('/^\s*$/', $string);
    }

    public function isDigitOnly(string $string) :null|bool
    {
        return ctype_digit($string);
    }

    public function isAlphabetOnly(string $string) :null|bool
    {
        return ctype_alpha($string);
    }

    public function escapeHtml(string $string) :null|string
    {
        return htmlspecialchars($string);
    }

    public function random(int $length = 16) :null|string
    {
        return substr(bin2hex(random_bytes($length)), 0, $length);
    }

    public function uniq(int $count = 1, int $length = 16) :null|string
    {
        $uniq = '';
        for ($i = 0; $i < $count; $i++) {
            $uniq .= $this->random($length);
            $uniq .= '-';
        }
        $uniq = $this->removeLast($uniq, '-');
        return $uniq;
    }

    public function length(string $string) :null|int
    {
        return mb_strlen($string);
    }

    public function reverse(string $string) :null|string
    {
        return strrev($string);
    }

    public function replace(string $string, string $search, string $replace, bool $sensitiveCase = false) :null|string
    {
        if ($sensitiveCase) {
            return str_replace($search, $replace, $string);
        }
        return str_ireplace($search, $replace, $string);
    }

    public function toLower(string $string) :null|string
    {
        return strtolower($string);
    }

    public function toUpper(string $string) :null|string
    {
        return strtoupper($string);
    }

    public function toFirstCharLower(string $string) :null|string
    {
        return lcfirst($string);
    }

    public function toFirstCharUpper(string $string) :null|string
    {
        return ucfirst($string);
    }

    public function toTitle(string $string) :null|string
    {
        return ucwords($string);
    }

    public function toCamel(string $string, bool $firstCharCaplitalize = false) :null|string
    {
        $string = $this->toLower($string);
        $string = $this->replace($string, '-', ' ');
        $string = $this->toTitle($string);
        $string = $this->replace($string, ' ', '');
        $string = $firstCharCaplitalize ? $string : $this->toFirstCharLower($string);
        return $string;
    }

    public function toSwape(string $string) :null|string
    {
        $chars = str_split($string);
        foreach ($chars as &$char) {
            $char = ctype_upper($char) ? strtolower($char) : strtoupper($char);
        }
        return implode('', $chars);
    }

    public function indexOfFirst(string $string, string $search, bool $sensitiveCase = false) :null|int
    {
        if ($sensitiveCase) {
            return strpos($string, $search);
        }
        return stripos($string, $search);
    }

    public function indexOfLast(string $string, string $search, bool $sensitiveCase = false) :null|int
    {
        if ($sensitiveCase) {
            return strrpos($string, $search);
        }
        return strripos($string, $search);
    }

    public function contains(string $string, string $search, bool $sensitiveCase = false) :null|bool
    {
        if ($sensitiveCase) {
            return str_contains($string, $search);
        }
        return str_contains($this->toLower($string), $this->toLower($search));
    }

    public function startWith(string $string, string $search, bool $sensitiveCase = false) :null|bool
    {
        if ($sensitiveCase) {
            return str_starts_with($string, $search);
        }
        return str_starts_with($this->toLower($string), $this->toLower($search));
    }

    public function endWith(string $string, string $search, bool $sensitiveCase = false) :null|bool
    {
        if ($sensitiveCase) {
            return str_ends_with($string, $search);
        }
        return str_ends_with($this->toLower($string), $this->toLower($search));
    }

    public function removeFirst(string $string, string $search, bool $sensitiveCase = false) :null|string
    {
        if ($search === '') {
            return $string;
        }
        if ($this->startWith($string, $search, $sensitiveCase)) {
            $length = $this->length($search);
            return substr($string, $length);
        }
        return $string;
    }

    public function removeLast(string $string, string $search, bool $sensitiveCase = false) :null|string
    {
        $stringLength = $this->length($string);
        $searchLength = $this->length($search);
        if ($search === '') {
            return $string;
        }
        if ($searchLength > $stringLength) {
            return $string;
        }
        $endOfString = substr($string, -$searchLength);
        if (!$sensitiveCase) {
            $endOfString = $this->toLower($endOfString);
            $search = $this->toLower($search);
        }
        if ($endOfString === $search) {
            return substr($string, 0, $stringLength - $searchLength);
        }
        return $string;
    }

    public function removeFirstAndLast(string $string, string $search, bool $sensitiveCase = false) :null|string
    {
        $searchLength = $this->length($search);
        $stringLength = $this->length($string);
        if ($search === '') {
            return $string;
        }    
        if ($stringLength < $searchLength * 2) {
            return $string;
        }
        $starts = $this->startWith($string, $search, $sensitiveCase);
        $endOfString = substr($string, -$searchLength);
        if (!$sensitiveCase) {
            $endOfString = $this->toLower($endOfString);
            $searchLower = $this->toLower($search);
        } else {
            $searchLower = $search;
        }
        $ends = $endOfString === $searchLower;
        if ($starts) {
            $string = substr($string, $searchLength);
            $stringLength -= $searchLength;
        }
        if ($ends) {
            $string = substr($string, 0, $this->length($string) - $searchLength);
        }
        return $string;
    }

    public function convertToInteger(string $string) :null|int
    {
        if ($this->isDigitOnly($string)) {
            return (int) $string;
        }
        return null;
    }

    public function convertToFloat(string $string) :null|float
    {
        if ($this->isDigitOnly($string)) {
            return (float) $string;
        }
        return null;
    }

    public function convertToBoolean(string $string) :null|bool
    {
        return match ($this->toLower($string)) {
            'true' => true,
            '1' => true,
            'on' => true,
            'yes' => true,
            'iya' => true,
            'benar' => true,
            'false' => false,
            '0' => false,
            'off' => false,
            'no' => false,
            'tidak' => false,
            'salah' => false,
            default => null,
        };
    }

    public function convertToArray(string $string, int|string $arg,  ConvertToArrayTypes $type = ConvertToArrayTypes::SEPARATOR) :null|array
    {
        switch ($type) {
            case ConvertToArrayTypes::SEPARATOR:
                if ($this->isString($arg)) {
                    return $this->convertToArrayBySeparator($string, $arg);
                }
                return null;
            case ConvertToArrayTypes::LENGTH:
                if (is_int($arg)) {
                    return $this->convertToArrayByLength($string, $arg);
                }
                return null;
            default:
                return null;
        }
    }

    public function convertToArrayBySeparator(string $string, string $separator = '', int $limit = PHP_INT_MAX) :null|array
    {
        if ('' === $separator) {
            return str_split($string);
        }
        return explode($separator, $string, $limit);
    }

    public function convertToArrayByLength(string $string, int $length, int $limit = PHP_INT_MAX) :null|array
    {
        if ($length <= 0 || $limit <= 0 || $string === '') {
            return [];
        }
        $result = [];
        $position = 0;
        $maxLength = mb_strlen($string);
        while ($position < $maxLength && count($result) < $limit) {
            $slice = mb_substr($string, $position, $length);
            $result[] = $slice;
            $position += $length;
        }
        return $result;
    }
}