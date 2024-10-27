<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;
use Illuminate\Support\Carbon;

class UserTransactionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nama_paket' => $this->subscription->name,
            'metode_pembayaran' => $this->payment_method,
            'no_transaksi' => $this->order_id,
            'jumlah_bayar' => $this->gross_amount,
            'status' => $this->status,
            'tanggal' =>  Carbon::parse($this->transaction_time ?? $this->created_at)->getDays(), 
            'jam' => Carbon::parse($this->transaction_time ?? $this->created_at)->gettimeofday(),
        ];
    }
}
