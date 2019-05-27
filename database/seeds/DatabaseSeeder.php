<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call([
            LocaleCountriesTableSeeder::class,
            LocaleStatesTableSeeder::class,
            LocaleCitiesTableSeeder::class,
            CgBrandsTableSeeder::class,
            CgDepartamentsTableSeeder::class,
            CgCategoriesTableSeeder::class,
            CgSubCategoriesTableSeeder::class,
            StatusOrderTableSeeder::class,
            StatusPaymentTableSeeder::class,
            StatusProductTableSeeder::class,
            StatusRefundTableSeeder::class,
            StatusShippingTableSeeder::class,
            StatusUserTableSeeder::class,
            TypeAuctionTableSeeder::class,
            TypeEventTableSeeder::class,
            TypeIdentificationTableSeeder::class,
            TypePaymentTableSeeder::class,
            TypeShippingTableSeeder::class,
            TypeStoreTableSeeder::class,
            TypeTransactionTableSeeder::class,
            UserGenderTableSeeder::class,
            UserPlanTableSeeder::class,
            UserRelationshipTableSeeder::class,
            ScAboutUsesTableSeeder::class,
            ScCancelationsTableSeeder::class,
            ScCategorieFaqsTableSeeder::class,
            ScCookiesTableSeeder::class,
            ScEarnsTableSeeder::class,
            ScGuaranteesTableSeeder::class,
            ScIntPropiertiesTableSeeder::class,
            ScMisionsTableSeeder::class,
            ScObjectivesTableSeeder::class,
            ScPrivaciesTableSeeder::class,
            ScRechargesTableSeeder::class,
            ScRefundsTableSeeder::class,
            ScReturnsTableSeeder::class,
            ScShippingsTableSeeder::class,
            ScSocialsTableSeeder::class,
            ScTermsTableSeeder::class,
            ScVisionsTableSeeder::class,
            ScFaqsTableSeeder::class,
            WebSiteTableSeeder::class,
            PayTaxesTableSeeder::class,
            UserItemMediaTableSeeder::class,
            UserNewsTableSeeder::class,
            UsersTableSeeder::class,
            UserStoresTableSeeder::class,
            UserStoreBranchesTableSeeder::class
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(PayTaxesTableSeeder::class);
        $this->call(UserStoresTableSeeder::class);
        $this->call(UserStoreBranchesTableSeeder::class);
    }
}
