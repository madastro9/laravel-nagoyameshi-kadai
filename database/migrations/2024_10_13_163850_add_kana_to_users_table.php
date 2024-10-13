public function up()
{
Schema::table('users', function (Blueprint $table) {
$table->string('kana')->after('name');
});
}

public function down()
{
Schema::table('users', function (Blueprint $table) {
$table->dropColumn('kana');
});
}