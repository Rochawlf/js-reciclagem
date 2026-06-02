<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('collection_requests', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name');
            $table->string('phone');
            $table->string('address'); // Pode ser desmembrado em rua, cep, etc.
            $table->foreignId('material_id')->constrained(); // Relaciona com a tabela de materiais
            $table->string('estimated_volume'); // Ex: "Até 50kg", "Mais de 100kg"
            $table->date('scheduled_date');
            $table->enum('status', ['pending', 'confirmed', 'collected', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('collection_requests');
    }
};