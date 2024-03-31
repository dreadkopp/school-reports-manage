<?php

use App\Models\Pupil;
use App\Models\SchoolGroup;
use App\Models\SchoolSubject;
use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pupil_to_groups', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pupil::class);
            $table->foreignIdFor(SchoolGroup::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pupil_to_groups');
    }
};
