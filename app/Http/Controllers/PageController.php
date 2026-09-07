<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class PageController extends Controller
{
    protected function members(): array
    {
        $path = resource_path('data/team.json');
        if (! file_exists($path)) {
            return [];
        }

        return json_decode(file_get_contents($path), true) ?? [];
    }

    public function home()
    {
        $members = $this->members();

        return Inertia::render('Home', [
            'memberCount' => count($members),
        ]);
    }

    public function index()
    {
        return $this->home();
    }

    public function about()
    {
        return Inertia::render('About');
    }

    public function project()
    {
        return Inertia::render('Project');
    }

    public function kalkulator()
    {
        return Inertia::render('Kalkulator');
    }

    public function hitung($angka1, $angka2, $operasi)
    {
        $num1 = is_numeric($angka1) ? (float) $angka1 : 0;
        $num2 = is_numeric($angka2) ? (float) $angka2 : 0;
        $op = strtolower($operasi);

        $hasil = 0;
        $opText = $op;

        switch ($op) {
            case 'tambah':
            case 'add':
            case '+':
                $hasil = $num1 + $num2;
                $opText = 'tambah';
                break;
            case 'kurang':
            case 'sub':
            case '-':
                $hasil = $num1 - $num2;
                $opText = 'kurang';
                break;
            case 'kali':
            case 'mul':
            case '*':
            case 'x':
                $hasil = $num1 * $num2;
                $opText = 'kali';
                break;
            case 'bagi':
            case 'div':
            case '/':
                $opText = 'bagi';
                if ($num2 != 0) {
                    $hasil = $num1 / $num2;
                } else {
                    $hasil = 'tidak terdefinisi (pembagian dengan nol)';
                }
                break;
            default:
                $hasil = 'operasi tidak valid';
                break;
        }

        $teksHasil = is_numeric($hasil)
            ? "Hasil dari {$angka1} {$opText} {$angka2} adalah {$hasil}"
            : "Hasil dari {$angka1} {$opText} {$angka2} {$hasil}";

        return Inertia::render('Kalkulator', [
            'angka1' => $angka1,
            'angka2' => $angka2,
            'operasi' => $opText,
            'hasil' => $hasil,
            'teksHasil' => $teksHasil,
        ]);
    }
}
