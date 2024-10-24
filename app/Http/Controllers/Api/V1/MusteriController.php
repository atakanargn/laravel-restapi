<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMusteriRequest;
use App\Http\Requests\UpdateMusteriRequest;
use App\Models\Musteri;
use App\Http\Resources\V1\MusteriResource;
use App\Http\Resources\V1\MusteriCollection;
use App\Services\V1\MusteriQuery;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class MusteriController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $filter = new MusteriQuery();
        $queryItems = $filter->transform($request);

        if(count($queryItems)>0){
            return new MusteriCollection(Musteri::where([$queryItems])->paginate());
        }else{
            return new MusteriCollection(Musteri::paginate());
        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasyon kuralları
        $validator = Validator::make($request->all(), [
            'tip' => 'required|integer|in:1,2',
            'isim' => 'required|string|max:255',
            'vergi_dairesi' => 'nullable|string|max:255',
            'tc_vergi_no' => 'nullable|string|max:10',
            'yetkili_adsoyad' => 'nullable|string|max:255',
            'yetkili_email' => 'nullable|email|max:255',
            'yetkili_telefon' => 'nullable|string|max:20',
            'firma_adresi' => 'nullable|string|max:255',
            'fatura_adresi' => 'nullable|string|max:255',
            'ulke' => 'nullable|string|max:255',
            'sehir' => 'nullable|string|max:255',
            'ilce' => 'nullable|string|max:255',
            'posta_kodu' => 'nullable|string|max:10',
            'etiketler' => 'nullable|string|max:255',
            'para_birimi' => 'nullable|integer|in:949'
        ]);

        // Validasyon hataları varsa, hata mesajları ile birlikte geri dön
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Yeni müşteri oluştur
        $musteri = Musteri::create($request->all());

        // Başarılı yanıt döndür
        return response()->json($musteri, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Musteri $musteri)
    {
        return new MusteriResource($musteri);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Musteri $musteri)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMusteriRequest $request, Musteri $musteri)
    {
        // Validasyon kuralları
        $validator = Validator::make($request->all(), [
            'tip' => 'required|integer|in:1,2',
            'isim' => 'required|string|max:255',
            'vergi_dairesi' => 'nullable|string|max:255',
            'tc_vergi_no' => 'nullable|string|max:10',
            'yetkili_adsoyad' => 'nullable|string|max:255',
            'yetkili_email' => 'nullable|email|max:255',
            'yetkili_telefon' => 'nullable|string|max:20',
            'firma_adresi' => 'nullable|string|max:255',
            'fatura_adresi' => 'nullable|string|max:255',
            'ulke' => 'nullable|string|max:255',
            'sehir' => 'nullable|string|max:255',
            'ilce' => 'nullable|string|max:255',
            'posta_kodu' => 'nullable|string|max:10',
            'etiketler' => 'nullable|string|max:255',
            'para_birimi' => 'nullable|integer|in:949'
        ]);

        // Validasyon hataları varsa, hata mesajları ile birlikte geri dön
        if ($validator->fails()) {
            return response()->json($validator->errors(), 422);
        }

        // Müşteriyi güncelle
        $musteri->update($request->all());

        // Başarılı yanıt döndür
        return response()->json(new MusteriResource($musteri), 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Musteri $musteri)
    {
        // Müşteriyi sil
        $musteri->delete();

        // Başarılı yanıt döndür
        return response()->json(null, 204);
    }
}
