<?php

namespace MenyongMenying\MLibrary\Kucil\Utilities\MString\Contracts;

use MenyongMenying\MLibrary\Kucil\Utilities\MString\Enums\ConvertToArrayTypes;
use MenyongMenying\MLibrary\Kucil\Utilities\MString\MString;

/**
 * @author MenyongMenying <menyongmenying.main@email.com>
 * @version 0.0.1
 * @date 2025-07-20
 */
interface MStrInterface
{
    /**
     * @param  \MenyongMenying\MLibrary\Kucil\Utilities\MString\MString $mString 
     * @return void                                                              
     */
    public static function open(MString $mString) :void;

    /**
     * @return void 
     */
    public static function close() :void;

    /**
     * Mengecek apakah nilai bertipe data 'String'.
     * @param  mixed     $string Nilai yang akan dicek.
     * @return null|bool         Hasil pengecekan.
     */
    public static function isString(mixed $string) :null|bool;

    /**
     * Mengecek apakah string hanya berisi whitespace.
     * @param  string    $string String yang akan dicek.
     * @return null|bool         Hasil pengecekan.
     */
    public static function isWhitespaceOnly(string $string) :null|bool;

    /**
     * Mengecek apakah string hanya berisi digit.
     * @param  string    $string String yang akan dicek.
     * @return null|bool         Hasil pengecekan.
     */
    public static function isDigitOnly(string $string) :null|bool;

    /**
     * Mengecek apakah string hanya berisi huruf alfabet.
     * @param  string    $string String yang akan dicek.
     * @return null|bool         Hasil pengecekan.
     */
    public static function isAlphabetOnly(string $string) :null|bool;

    /**
     * Tidak mengeksekusi kode html.
     * @param  string $string      String yang ingin diubah menjadi data string yang tidak mengeksekusi kode html.
     * @return null|string         String yang sudah diproses.
     */
    public static function escapeHtml(string $string) :null|string;

    /**
     * Meneruskan string random.
     * @param  int    $length      Panjang string random.
     * @return null|string         String random.
     */
    public static function random(int $length = 16) :null|string;

    /**
     * Meneruskan kumpulan string random unik.
     * @param  int         $count  Jumlah random string.
     * @param  int         $length Panjang tiap random string.
     * @return null|string         
     */
    public static function uniq(int $count = 1, int $length = 16) :null|string;

    /**
     * Meneruskan panjang karakter string.
     * @param  string   $string String yang akan diteruskan panjang karakternya.
     * @return null|int         Panjang karakter $string.
     */
    public static function length(string $string) :null|int;

    /**
     * Membalikan nilai suatu string.
     * @param  string $string Nilai yang akan dibalik.
     * @return string         Hasil pengembalian nilai $string.
     */
    public static function reverse(string $string) :null|string;

    /**
     * Mengganti karakter pada suatu string.
     * @param  string      $string        String yang akan menjadi subjek pergantian.
     * @param  string      $search        Karakter yang akan diganti.
     * @param  string      $replace       Karakter pengganti.
     * @param  bool        $sensitiveCase Penggunaan sensitive case.
     * @return null|string                $string yang $search telah diganti dengan $replace.               
     */
    public static function replace(string $string, string $search, string $replace, bool $sensitiveCase = false) :null|string;

    /**
     * Mengubah semua karakter dalam string menjadi huruf kecil.
     * @param  string      $string String yang semua karakternya akan diubah menjadi huruf kecil.
     * @return null|string         $string yang semua karakternya telah diubah menjadi huruf kecil.
     */
    public static function toLower(string $string) :null|string;

    /**
     * Mengubah semua karakter dalam string menjadi huruf besar.
     * @param  string      $string String yang semua karakternya akan diubah menjadi huruf besar.
     * @return null|string         $string yang semua karakternya telah diubah menjadi huruf besar.
     */
    public static function toUpper(string $string) :null|string;

    /**
     * Mengubah karakter pertama dalam string menjadi huruf kecil.
     * @param  string      $string String yang karakter pertamanya akan diubah menjadi huruf kecil.
     * @return null|string         $string yang karakter pertamanya telah diubah menjadi huruf kecil.
     */
    public static function toFirstCharLower(string $string) :null|string;

    /**
     * Mengubah karakter pertama dalam string menjadi huruf besar.  
     * @param  string      $string String yang karakter pertamanya akan diubah menjadi huruf besar.
     * @return null|string         $string yang karakter pertamanya telah diubah menjadi huruf besar.
     */
    public static function toFirstCharUpper(string $string) :null|string;   

    /**
     * Mengubah string menjadi format title/judul.
     * @param  string      $string String yang akan diubah menjadi format title/judul.
     * @return null|string         Format title/judul $string.
     */
    public static function toTitle(string $string) :null|string; 

    /**
     * Mengubah string menjadi format camel-case.
     * @param  string      $string String yang akan diubah menjadi format camel-case.  
     * @return null|string         Camel-case $string.
     */
    public static function toCamel(string $string, bool $firstCharCapitalize = false) :null|string;

    /**
     * Membalikan kapitalisasi semua karakter dalam string.
     * @param  string      $string String yang semua karakternya akan dibalik kapitalisasinya.
     * @return null|string         String yang semua karakternya telah dibalik kapitalisasinya.
     */
    public static function toSwape(string $string) :null|string;

    /**
     * Meneruskan posisi pertama dari karakter pada string.
     * @param  string   $string        String yang akan diteruskan posisi terakhir karakternya.
     * @param  string   $search        Karakter yang akan diteruskan posisi terakhirnya.
     * @param  bool     $sensitiveCase 
     * @return null|int                
     */
    public static function indexOfFirst(string $string, string $search, bool $sensitiveCase = false) :null|int;

    /**
     * Meneeruskan posisi terakhir dari karakter pada string.
     * @param  string   $string        String yang akan diteruskan posisi terakhir karakternya.
     * @param  string   $search        Karakter yang akan diteruskan posisi terakhirnya.
     * @param  bool     $sensitiveCase 
     * @return null|int                
     */
    public static function indexOfLast(string $string, string $search, bool $sensitiveCase = false) :null|int;

    /**
     * Mengecek apakah string mengandung karakter tertentu.
     * @param  string    $string        String yang akan dicek.
     * @param  string    $search        Karakter yang akan dicari.
     * @param  bool      $sensitiveCase 
     * @return null|bool                
     */
    public static function contains(string $string, string $search, bool $sensitiveCase = false) :null|bool;

    /**
     * Mengecek apakah string diawali oleh karakter tertentu.
     * @param  string    $string        String yang akan dicek.
     * @param  string    $search        Karakter yang akan dicek.
     * @param  bool      $sensitiveCase 
     * @return null|bool                
     */
    public static function startWith(string $string, string $search, bool $sensitiveCase = false) :null|bool;

    /**
     * Mengecek apakah string diakhiri oleh karakter tertentu.
     * @param  string    $string        String yang akan dicek.
     * @param  string    $search        Karakter yang akan dicek.
     * @param  bool      $sensitiveCase 
     * @return null|bool                
     */
    public static function endWith(string $string, string $search, bool $sensitiveCase = false) :null|bool;

    /**
     * Menghapus karakter tertentu pada awalan string.
     * @param  string      $string        String yang akan dihapus karakter tertentu pada awalannya.
     * @param  string      $search        Karakter yang akan dihapus.
     * @param  bool        $sensitiveCase 
     * @return null|string                
     */
    public static function removeFirst(string $string, string $search, bool $sensitiveCase = false) :null|string;

    /**
     * Mengghapus karakter tertentu pada akhiran string.
     * @param  string      $string        String yang akan dihapus karakter tertentu pada akhirannya.
     * @param  string      $search        Karakter yang akan dihapus.
     * @param  bool        $sensitiveCase 
     * @return null|string                
     */
    public static function removeLast(string $string, string $search, bool $sensitiveCase = false) :null|string;

    /**
     * Menghapus karakter tertentu pada awalan dan akhiran string.
     * @param  string      $string        String yang akan dihapus karakter tertentu pada awalan dan akhirannya.
     * @param  string      $search        Karakter yang akan dihapus.
     * @param  bool        $sensitiveCase 
     * @return null|string                
     */
    public static function removeFirstAndLast(string $string, string $search, bool $sensitiveCase = false) :null|string;

    /**
     * Mengubah string menjadi tipe data 'Integer'.
     * @param  string   $string String yang akan diubah menjadi tipe data 'Integer'.
     * @return null|int         Integer $string.
     */
    public static function convertToInteger(string $string) :null|int;

    /**
     * Mengubah string menjadi tipe data 'Float'.
     * @param  string     $string String yang akan diubah menjadi tipe data 'Float'.
     * @return null|float         Float $string.
     */
    public static function convertToFloat(string $string) :null|float;

    /**
     * Mengubah string menjadi tipe data 'Boolean'.
     * @param  string    $string String yang akan diubah menjadi tipe data 'Boolean'.
     * @return null|bool         Boolean $string.
     */
    public static function convertToBoolean(string $string) :null|bool;

    /**
     * Mengubah string menjadi tipe data 'Array'.
     * @param  string     $string String yang akan diubah menjadi tipe data 'Array'.
     * @param  int|string $arg    Argumen yang akan digunakan untuk mengubah string menjadi tipe data 'Array'.
     * @param  [type]     $type   
     * @return null|array         
     */
    public static function convertToArray(string $string, int|string $arg, ConvertToArrayTypes $type = ConvertToArrayTypes::SEPARATOR) :null|array;
    
    /**
     * Mengubah string menjadi tipe data 'Array' dengan separator tertentu.
     * @param  string     $string    String yang akan diubah menjadi tipe data 'Array'.
     * @param  string     $separator Separator yang akan digunakan untuk memisahkan string.
     * @param  [type]     $limit     Batasan jumlah array.
     * @return null|array            Array $string.
     */
    public static function convertToArrayBySeparator(string $string, string $separator, int $limit = PHP_INT_MAX) :null|array;

    /**
     * Mengubah string menjadi tipe data 'Array' dengan panjang karakter tertentu.
     * @param  string     $string String yang akan diubah menjadi tipe data 'Array'.
     * @param  int        $length Panjang karakter setiap elemen array.
     * @param  [type]     $limit  Batasan jumlah array.
     * @return null|array         
     */
    public static function convertToArrayByLength(string $string, int $length, int $limit = PHP_INT_MAX) :null|array;
}