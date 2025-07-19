<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MString;

use MenyongMenying\MLibrary\Kucil\Utilities\MString\Contracts\MStrInterface;
use MenyongMenying\MLibrary\Kucil\Utilities\MString\Enums\ConvertToArrayTypes;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-20
 */
final class MStr implements MStrInterface
{
    /**
     * Objek dari class 'MString'.
     * @var MString 
     */
    private static MString $mString;

    public static function open(MString $mString = new MString) :void
    {
        if (isset(self::$mString)) {
            return;
        }
        self::$mString = $mString;
        return;
    }

    public static function close() :void
    {
        unset(self::$mString);
        return;
    }

    public static function isString(mixed $string) :null|bool
    {
        if (isset(self::$mString)) {
            return self::$mString->isString($string);
        }
        return null;
    }

    public static function isWhitespaceOnly(string $string) :null|bool
    {
        if (isset(self::$mString)) {
            return self::$mString->isWhitespaceOnly($string);
        }
        return null;
    }

    public static function isDigitOnly(string $string) :null|bool
    {
        if (isset(self::$mString)) {
            return self::$mString->isDigitOnly($string);
        }
        return null;
    }

    public static function isAlphabetOnly(string $string) :null|bool
    {
        if (isset(self::$mString)) {
            return self::$mString->isAlphabetOnly($string);
        }
        return null;
    }

    public static function escapeHtml(string $string) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->escapeHtml($string);
        }
        return null;
    }

    public static function random(int $length = 16) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->random($length);
        }
        return null;
    }
    
    public static function uniq(int $count = 1, int $length = 16) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->uniq($count, $length);
        }
        return null;
    }

    public static function length(string $string) :null|int
    {
        if (isset(self::$mString)) {
            return self::$mString->length($string);
        }
        return null;
    }

    public static function reverse(string $string) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->reverse($string);
        }
        return null;
    }

    public static function replace(string $string, string $search, string $replace, bool $sensitiveCase = false) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->replace($string, $search, $replace, $sensitiveCase);
        }
        return null;
    }

    public static function toLower(string $string) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->toLower($string);
        }
        return null;
    }

    public static function toUpper(string $string) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->toUpper($string);
        }
        return null;
    }

    public static function toFirstCharLower(string $string) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->toFirstCharLower($string);
        }
        return null;
    }

    public static function toFirstCharUpper(string $string) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->toFirstCharUpper($string);
        }
        return null;
    }

    public static function toTitle(string $string) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->toTitle($string);
        }
        return null;
    }

    public static function toCamel(string $string, bool $firstCharCapitalize = false) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->toCamel($string, $firstCharCapitalize);
        }
        return null;
    }

    public static function toSwape(string $string) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->toSwape($string);
        }
        return null;
    }

    public static function indexOfFirst(string $string, string $search, bool $sensitiveCase = false) :null|int
    {
        if (isset(self::$mString)) {
            return self::$mString->indexOfFirst($string, $search, $sensitiveCase);
        }
        return null;
    }

    public static function indexOfLast(string $string, string $search, bool $sensitiveCase = false) :null|int
    {
        if (isset(self::$mString)) {
            return self::$mString->indexOfLast($string, $search, $sensitiveCase);
        }
        return null;
    }

    public static function contains(string $string, string $search, bool $sensitiveCase = false) :null|bool
    {
        if (isset(self::$mString)) {
            return self::$mString->contains($string, $search, $sensitiveCase);
        }
        return null;
    }

    public static function startWith(string $string, string $search, bool $sensitiveCase = false) :null|bool
    {
        if (isset(self::$mString)) {
            return self::$mString->startWith($string, $search, $sensitiveCase);
        }
        return null;
    }

    public static function endWith(string $string, string $search, bool $sensitiveCase = false) :null|bool
    {
        if (isset(self::$mString)) {
            return self::$mString->endWith($string, $search, $sensitiveCase);
        }
        return null;
    }

    public static function removeFirst(string $string, string $search, bool $sensitiveCase = false) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->removeFirst($string, $search, $sensitiveCase);
        }
        return null;
    }

    public static function removeLast(string $string, string $search, bool $sensitiveCase = false) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->removeLast($string, $search, $sensitiveCase);
        }
        return null;
    }

    public static function removeFirstAndLast(string $string, string $search, bool $sensitiveCase = false) :null|string
    {
        if (isset(self::$mString)) {
            return self::$mString->removeFirstAndLast($string, $search, $sensitiveCase);
        }
        return null;
    }

    public static function convertToInteger(string $string) :null|int
    {
        if (isset(self::$mString)) {
            return self::$mString->convertToInteger($string);
        }
        return null;
    }

    public static function convertToFloat(string $string) :null|float
    {
        if (isset(self::$mString)) {
            return self::$mString->convertToFloat($string);
        }
        return null;
    }

    public static function convertToBoolean(string $string) :null|bool
    {
        if (isset(self::$mString)) {
            return self::$mString->convertToBoolean($string);
        }
        return null;
    }

    public static function convertToArray(string $string, int|string $arg,  ConvertToArrayTypes $type = ConvertToArrayTypes::SEPARATOR) :null|array
    {
        if (isset(self::$mString)) {
            return self::$mString->convertToArray($string, $arg, $type);
        }
        return null;
    }

    public static function convertToArrayBySeparator(string $string, string $separator, int $limit = PHP_INT_MAX) :null|array
    {
        if (isset(self::$mString)) {
            return self::$mString->convertToArrayBySeparator($string, $separator, $limit);
        }
        return null;
    }

    public static function convertToArrayByLength(string $string, int $length, int $limit = PHP_INT_MAX) :null|array
    {
        if (isset(self::$mString)) {
            return self::$mString->convertToArrayByLength($string, $length, $limit);
        }
        return null;
    }
}