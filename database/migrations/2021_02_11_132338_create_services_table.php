<?php

use App\Models\Service;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('service_category_id');
            $table->foreign("service_category_id")->on("service_categories")->references("id");
            $table->string('price');
            $table->unsignedBigInteger('employee_id');
            $table->foreign("employee_id")->on("users")->references("id");
            $table->enum('status', Service::SERVICE_STATUSES)->default(Service::STATUS_ACTIVE);
            $table->text('description');
            $table->string('slug');
            $table->string('discount')->default(0);
            $table->enum('discount_type', ["Percent", "Fixed"])->default("Percent");
            $table->integer('time_required');
            $table->enum('time_required_type', ["Days", "Weeks", "Months"])->default("Days");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('services');
    }
}
