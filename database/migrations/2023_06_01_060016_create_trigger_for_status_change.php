<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        DB::unprepared('
            CREATE TRIGGER update_order_status AFTER UPDATE ON payments
            FOR EACH ROW
            BEGIN
                IF NEW.status = "active" THEN
                    UPDATE orders SET orderstatus = "active" WHERE id = NEW.id;
                ELSEIF NEW.status = "declined" THEN
                    UPDATE orders SET orderstatus = "cancelled" WHERE id = NEW.id;
                END IF;
            END;

            
        ');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */

    /*
    CREATE TRIGGER create_payment_entry AFTER INSERT ON orders
            FOR EACH ROW
            BEGIN
                INSERT INTO payments (orderID, user_id, amount, account_name, card_number, date, status, transaction_id, created_at, updated_at)
                VALUES (NEW.id, NEW.user_id, 0.00, "", "", NOW(), "pending", "", NOW(), NOW());
            END;

            */
    public function down()
    {
        DB::unprepared('DROP TRIGGER IF EXISTS update_order_status');
    }
};
