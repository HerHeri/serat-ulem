<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Spatie\Permission\Models\Role;

/**
 * Mengembalikan phone number yang sudah diformat
 */
function format_phone(?string $phone, string $prefix = '62'): ?string
{
    // Jika phone adalah JID
    if (str_contains($phone, '@g')) return $phone;

    $phone = preg_replace('/[^0-9]/', '', $phone); // get numeric chars
    if ($phone === '') return null;

    if (substr($phone, 0, 1) == '0') {
        $phone = substr($phone, 1);
    }
    if (in_array(substr($phone, 0, 2), ['62', $prefix])) {
        $phone = substr($phone, 2);
    }
    return $prefix . $phone;
}

function SpinText($text)
{
    return preg_replace_callback('/{(.*?)}/', function ($match) {
        $words = explode('|', $match[1]);

        return $words[array_rand($words)];
    }, $text);
}

function  ReplaceArray($array, $string)
{
    $pjg = substr_count($string, "[");
    for ($i = 0; $i < $pjg; $i++) {
        $col1 = strpos($string, "[");
        $col2 = strpos($string, "]");
        $find = strtolower(substr($string, $col1 + 1, $col2 - $col1 - 1));
        $relp = substr($string, $col1, $col2 - $col1 + 1);
        if (isset($array[$find])) {
            $string = str_replace($relp, $array[$find], $string);     //asli       
        } else {
            $string = str_replace('[' . $find . ']', '', $string);
        }
    }
    // return $string;
    return SpinText(salam($string));
}

function availLocale()
{
    return [
        'en' => 'en',
        'id' => 'id'
    ];
}

function dotNum($num): string
{
    if (is_numeric($num)) {
        return number_format($num, 0, ',', '.');
    }
    return '-';
}

function Rp($num)
{
    return "Rp. " . dotNum($num, 0, ',', '.');
}

/**
 * Make a directory recursively
 * 
 * @param string $path location of new folder
 * @param string $permsions permission of new folder
 */
function mkdir_R(String $path, $permsions = 0755): void
{
    if (!file_exists($path)) {
        $old_umask = umask(0);
        mkdir($path, $permsions, true);
        umask($old_umask);
    }
}


function storage_url($storage_file)
{
    return url(Storage::url($storage_file));
}


function save_file_from_url(String $url, String $path, String $filename)
{
    $response = Http::retry(3, 1000, null, false)->get($url);
    $ext = explode('/', $response->header('Content-Type'))[1];
    $url = $response->transferStats->getHandlerStats()['url'];
    $url = explode('?', $url)[0];
    $file_size = File::put("{$path}/{$filename}.{$ext}", $response->body());
    return [
        'name' => "{$filename}.{$ext}",
        'path' => "{$path}/{$filename}.{$ext}",
        'ext' => $ext,
        'size' => $file_size
    ];
}

function hari_ini($date)
{
    $hari = $date ?? date("D");

    switch ($hari) {
        case 'Sun':
            $hari_ini = "Minggu";
            break;

        case 'Mon':
            $hari_ini = "Senin";
            break;

        case 'Tue':
            $hari_ini = "Selasa";
            break;

        case 'Wed':
            $hari_ini = "Rabu";
            break;

        case 'Thu':
            $hari_ini = "Kamis";
            break;

        case 'Fri':
            $hari_ini = "Jumat";
            break;

        case 'Sat':
            $hari_ini = "Sabtu";
            break;

        default:
            $hari_ini = "Tidak di ketahui";
            break;
    }

    return $hari_ini;
}

function bulan_ini($month){
    $bulan = $month ?? date('F');
    switch ($bulan) {
        case 'January':
            $bulan_ini = "Januari";
            break;
        case 'February':
            $bulan_ini = "Februari";
            break;
        case 'March':
            $bulan_ini = "Maret";
            break;
        case 'April':
            $bulan_ini = "April";
            break;
        case 'May':
            $bulan_ini = "Mei";
            break;
        case 'June':
            $bulan_ini = "Juni";
            break;
        case 'July':
            $bulan_ini = "Juli";
            break;
        case 'August':
            $bulan_ini = "Agustus";
            break;
        case 'September':
            $bulan_ini = "September";
            break;
        case 'October':
            $bulan_ini = "Oktober";
            break;
        case 'November':
            $bulan_ini = "November";
            break;
        case 'December':
            $bulan_ini = "Desember";
            break;

        default:
            $bulan_ini = 'Tidak diketahui';
            break;
    }

    return $bulan_ini;
}

function salam($text)
{
    $b = Carbon\Carbon::now()->format('H');
    $hour = (int) $b;
    $hasil = "";
    if ($hour >= 0 && $hour < 10) {
        $hasil = "Pagi";
    } elseif ($hour >= 10 && $hour < 15) {
        $hasil = "Siang";
    } elseif ($hour >= 15 && $hour <= 17) {
        $hasil = "Sore";
    } else {
        $hasil = "Malam";
    }

    $text = str_replace(['Pagi', 'Siang', 'Sore', 'Malam'], $hasil, $text);
    return $text;
}

function addZero($number, int $length = 3)
{
    return str_pad($number, $length, '0', STR_PAD_LEFT);
}

function autonumber($id_terakhir, $panjang_kode, $panjang_angka)
{

    // mengambil nilai kode ex: KNS0015 hasil KNS
    $kode = substr($id_terakhir, 0, $panjang_kode);

    // mengambil nilai angka
    // ex: KNS0015 hasilnya 0015
    $angka = substr($id_terakhir, $panjang_kode, $panjang_angka);

    // menambahkan nilai angka dengan 1
    // kemudian memberikan string 0 agar panjang string angka menjadi 4
    // ex: angka baru = 6 maka ditambahkan strig 0 tiga kali
    // sehingga menjadi 0006
    $angka_baru = str_repeat("0", $panjang_angka - strlen($angka + 1)) . ($angka + 1);
    // return $angka_baru;

    // menggabungkan kode dengan nilang angka baru
    $id_baru = $kode . $angka_baru;

    return $id_baru;
}

function formatDateInIndonesian($date, $type) {
    // Array untuk mengganti nama hari dalam bahasa Inggris dengan bahasa Indonesia
    $days_in_indonesian = [
        'Monday'    => 'Senin',
        'Tuesday'   => 'Selasa',
        'Wednesday' => 'Rabu',
        'Thursday'  => 'Kamis',
        'Friday'    => 'Jumat',
        'Saturday'  => 'Sabtu',
        'Sunday'    => 'Minggu'
    ];

    // Mendapatkan nama hari dalam bahasa Inggris
    $day_name = $days_in_indonesian[date("l", strtotime($date))];

    // Menyusun tanggal dengan format: Hari, dd bulan yyyy
    if ($type == 'full') {
      return $day_name . ", " . date("d F Y", strtotime($date));
    }
    else if ($type == 'day') {
      return $day_name;
    }
    else if ($type == 'date') {
      return date("d", strtotime($date));
    }
    else if ($type == 'month') {
      return date("F", strtotime($date));
    }
    else if ($type == 'year') {
      return date("Y", strtotime($date));
    }
}

function permissionOfAccess(string $access_name): array
{
    $data = collect(config('access_permission.permissions'));
    $data = $data->pluck($access_name)->filter(fn ($value, $key) => gettype($value) == 'array');
    return array_merge(...$data->toArray());
}

function getDescriptionFromPermission(string $permission_name): ?string
{
    $permsions = [];
    foreach (listAccess() as $name) {
        $permsions = array_merge($permsions, permissionOfAccess($name));
        if (($permsions[$permission_name] ?? null)) {
            return $permsions[$permission_name];
        }
    }
    return null;
}

function listAccess(): array
{
    $permissions_list = collect(config('access_permission.permissions'));
    $roles = $permissions_list->map(fn ($value, $key) => array_keys($value))->toArray();
    return array_unique(array_merge(...$roles));
}

function access(...$access_name): array
{
    $permsions = [];
    foreach ($access_name as $name) {
        $permsions = array_merge($permsions, array_keys(permissionOfAccess($name)));
    }
    return $permsions;
}

function listPermission(): array
{
    return access(...listAccess());
}

function userCan($permission)
{
    try {
        if (Auth::guest()) return false;
        return Auth::user()->can($permission);
    } catch (\Throwable $th) {
        return false;
    }
}

function userCannot(string $permission)
{
    try {
        if (Auth::guest()) return true;
        return Auth::user()->cannot($permission);
    } catch (\Throwable $th) {
        return true;
    }
}

function userHasRole(string ...$roles_name): bool
{
    try {
        if (Auth::guest()) return false;
        return Auth::user()->hasRole($roles_name);
    } catch (\Throwable $th) {
        return false;
    }
}

function userHasNoRole(string ...$roles_name): bool
{
    return !userHasRole(...$roles_name);
}

function getRolesName()
{
    return array_keys(getRoles());
}

function getRoles($role_name = null): array
{
    $roles = config('access_permission.roles');
    if ($role_name) {
        return $roles[$role_name];
    }
    return $roles;
}

function ifAbort(bool $condition, int $code = 403, string $message = '', array $headers = [])
{
    if ($condition) {
        return abort($code, $message, $headers);
    }
}

function copywriting($text)
{
    return \App\Helpers\Copywriting::init()->withTimeData()->text($text);
}

function makeCopywriting($text, array $data = [])
{
    return copywriting($text)->data($data)->make()->get();
}

function s3_url(string $path): string
{
    return Storage::disk('s3')->url($path);
}

function s3_path(string $url): string
{
    return explode(env('AWS_BUCKET'), $url)[1] ?? '';
}

function roleMaster()
{
    return config('access_permission.role_master');
}

function canAbort($permission, int $code = 403, string $message = '', array $headers = [])
{
    if ($message === '' && $code === 403) {
        $message = 'Unauthorized for this action';
    }
    if (Auth::guest()) {
        return abort(401, 'Unauthorized', $headers);
    }
    if (!userCan($permission)) {
        return abort($code, $message, $headers);
    }
}

function font_path($path): string
{
    $path = ltrim($path, '/');
    return public_path("assets/fonts/{$path}");
}

function kmToMil(int $km): float
{
    return $km * 0.6213689;
}

/**
 * Mendapatkan role dari name dengan scope = web yang sedang aktif
 * @param string $name nama role yang dicari (cukup awalan saya contoh: admin, cabang, mitra)
 * @param ?string $scope scope yang dicari contoh: qlobal, terminalumroh, qblat jika null maka akan mengambil dari web yang aktif
 */
function getRoleScope(string $role_name, ?string $scope = null): ?Role
{
    return Role::where('name', 'like', "$role_name%")->where('scope', $scope ?? web()->route)->first();
}

/**
 * Standart untuk membuat nama role dengan scope web
 */
function formatRoleWeb(string $role_name): string
{
    return "{$role_name}-" . web()->route;
}

/**
 * Mendapatkan nama column di tabel users yang sesuai 
 * dengan web yang sedang aktif
 */
function getColumnNameHost(): string
{
    // NOTE:  kalo error penulisan domain salah
    $host = request()->host();
    $column_hosts = [
        'terminal_umroh' => 'terminalumroh.com',
        'safaria' => 'safaria.co.id',
    ];
    return array_search($host, $column_hosts);
}

function web()
{
    return app('currentWeb');
}

function html_view($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function incrementKodePaket(string $kode, bool $cloning = false): string
{
    $kode = explode('-', $kode);
    $char = preg_replace('/[^a-zA-Z]/', '', $kode[0]);
    $number = (int) preg_replace('/[^0-9]/', '', $kode[0]);
    if ($cloning) {
        $clone = '-' . (int) ($kode[1] ?? -1) + 1;
    } else {
        $number++;
        $clone = '';
    }
    return "{$char}{$number}{$clone}";
}

function makeSlugPaket(string $nama_paket, string $kode_cloning_paket): string
{
    return str_replace(' ', '-', preg_replace("/[^A-Za-z0-9.!?[:space:]]/", '', $nama_paket)) . "-{$kode_cloning_paket}";
}

function makeSlug(string $nama_travel): string
{
    return str_replace(' ', '-', preg_replace("/[^A-Za-z0-9.!?[:space:]]/", '', $nama_travel));
}


function imgResize($image, int $width, int $height, string $ext = 'jpg', int $quality = 95): \Intervention\Image\Image
{
    $img = Image::make($image);
    $img->resize($width, $height, function ($constraint) {
        $constraint->aspectRatio();
    })->encode($ext, $quality);

    return $img;
}


function blockOpenRedirect($url)
{
    $domain = parse_url($url, PHP_URL_HOST);
    $whitelist = [
        'terminalumroh.com',
        '.com',
        'localhost',
    ];
    if (!in_array($domain, $whitelist)) {
        return abort(403, 'Redirect to external domain is not allowed');
    }
}

function hitungPersen($nilai, $total)
{
    if ($total <= 0) return null;
    return (int) ($nilai / $total) * 100;
}

function valOfPercent($persen, $nilai)
{
    return (int) round(($persen / 100) * $nilai);
}
