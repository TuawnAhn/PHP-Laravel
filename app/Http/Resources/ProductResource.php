<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'ma_san_pham' => $this->ma_san_pham,
            'ten_san_pham' => $this->ten_san_pham,
            'gia' => $this->gia,
            'gia_khuyen_mai' => $this->gia_khuyen_mai,
            'so_luong' => $this->so_luong,
            'trang_thai' => $this->trang_thai ? 'Còn hàng' : 'Hết hàng',
            'ngay_nhap' => $this->ngay_nhap,
            'category' => $this->category->ten_danh_muc ?? null,
            'created_at' => $this->created_at->diffForHumans(),
        ];
    }
}
