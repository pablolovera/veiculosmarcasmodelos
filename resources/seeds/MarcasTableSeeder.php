<?php

use Illuminate\Database\Seeder;

class MarcasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  tipo_veiculo_id = 1 => CARROS E UTILITARIOS
        //  tipo_veiculo_id = 2 => MOTOS
        //  tipo_veiculo_id = 3 => CAMINHOES E ONIBUS

        DB::table('marcas')->insert(['id' =>	1	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Acura'	]);
        DB::table('marcas')->insert(['id' =>	2	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Agrale'	]);
        DB::table('marcas')->insert(['id' =>	3	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Alfa Romeo'	]);
        DB::table('marcas')->insert(['id' =>	4	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'AM Gen'	]);
        DB::table('marcas')->insert(['id' =>	5	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Asia Motors'	]);
        DB::table('marcas')->insert(['id' =>	6	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Audi'	]);
        DB::table('marcas')->insert(['id' =>	7	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'BMW'	]);
        DB::table('marcas')->insert(['id' =>	8	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'BRM'	]);
        DB::table('marcas')->insert(['id' =>	9	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Buggy'	]);
        DB::table('marcas')->insert(['id' =>	10	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Cadillac'	]);
        DB::table('marcas')->insert(['id' =>	11	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'CBT Jipe'	]);
        DB::table('marcas')->insert(['id' =>	12	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Chrysler'	]);
        DB::table('marcas')->insert(['id' =>	13	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Citroën'	]);
        DB::table('marcas')->insert(['id' =>	14	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Cross Lander'	]);
        DB::table('marcas')->insert(['id' =>	15	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Daewoo'	]);
        DB::table('marcas')->insert(['id' =>	16	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Daihatsu'	]);
        DB::table('marcas')->insert(['id' =>	17	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Dodge'	]);
        DB::table('marcas')->insert(['id' =>	18	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Engesa'	]);
        DB::table('marcas')->insert(['id' =>	19	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Envemo'	]);
        DB::table('marcas')->insert(['id' =>	20	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Ferrari'	]);
        DB::table('marcas')->insert(['id' =>	21	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Fiat'	]);
        DB::table('marcas')->insert(['id' =>	22	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Ford'	]);
        DB::table('marcas')->insert(['id' =>	23	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'GM - Chevrolet'	]);
        DB::table('marcas')->insert(['id' =>	24	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Gurgel'	]);
        DB::table('marcas')->insert(['id' =>	25	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Honda'	]);
        DB::table('marcas')->insert(['id' =>	26	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Hyundai'	]);
        DB::table('marcas')->insert(['id' =>	27	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Isuzu'	]);
        DB::table('marcas')->insert(['id' =>	28	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Jaguar'	]);
        DB::table('marcas')->insert(['id' =>	29	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Jeep'	]);
        DB::table('marcas')->insert(['id' =>	30	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'JPX'	]);
        DB::table('marcas')->insert(['id' =>	31	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Kia Motors'	]);
        DB::table('marcas')->insert(['id' =>	32	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Lada'	]);
        DB::table('marcas')->insert(['id' =>	33	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Land Rover'	]);
        DB::table('marcas')->insert(['id' =>	34	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Lexus'	]);
        DB::table('marcas')->insert(['id' =>	35	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Lotus'	]);
        DB::table('marcas')->insert(['id' =>	36	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Maserati'	]);
        DB::table('marcas')->insert(['id' =>	37	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Matra'	]);
        DB::table('marcas')->insert(['id' =>	38	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Mazda'	]);
        DB::table('marcas')->insert(['id' =>	39	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Mercedes-Benz'	]);
        DB::table('marcas')->insert(['id' =>	40	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Mercury'	]);
        DB::table('marcas')->insert(['id' =>	41	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Mitsubishi'	]);
        DB::table('marcas')->insert(['id' =>	42	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Miura'	]);
        DB::table('marcas')->insert(['id' =>	43	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Nissan'	]);
        DB::table('marcas')->insert(['id' =>	44	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Peugeot'	]);
        DB::table('marcas')->insert(['id' =>	45	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Plymouth'	]);
        DB::table('marcas')->insert(['id' =>	46	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Pontiac'	]);
        DB::table('marcas')->insert(['id' =>	47	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Porsche'	]);
        DB::table('marcas')->insert(['id' =>	48	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Renault'	]);
        DB::table('marcas')->insert(['id' =>	49	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Rover'	]);
        DB::table('marcas')->insert(['id' =>	50	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Saab'	]);
        DB::table('marcas')->insert(['id' =>	51	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Saturn'	]);
        DB::table('marcas')->insert(['id' =>	52	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Seat'	]);
        DB::table('marcas')->insert(['id' =>	54	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Subaru'	]);
        DB::table('marcas')->insert(['id' =>	55	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Suzuki'	]);
        DB::table('marcas')->insert(['id' =>	56	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Toyota'	]);
        DB::table('marcas')->insert(['id' =>	57	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Troller'	]);
        DB::table('marcas')->insert(['id' =>	58	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Volvo'	]);
        DB::table('marcas')->insert(['id' =>	59	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'VW - VolksWagen'	]);
        DB::table('marcas')->insert(['id' =>	60	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'ADLY'	]);
        DB::table('marcas')->insert(['id' =>	61	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'AGRALE'	]);
        DB::table('marcas')->insert(['id' =>	62	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'APRILIA'	]);
        DB::table('marcas')->insert(['id' =>	63	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'ATALA'	]);
        DB::table('marcas')->insert(['id' =>	64	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BAJAJ'	]);
        DB::table('marcas')->insert(['id' =>	65	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BETA'	]);
        DB::table('marcas')->insert(['id' =>	66	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BIMOTA'	]);
        DB::table('marcas')->insert(['id' =>	67	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BMW'	]);
        DB::table('marcas')->insert(['id' =>	68	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BRANDY'	]);
        DB::table('marcas')->insert(['id' =>	69	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'byCristo'	]);
        DB::table('marcas')->insert(['id' =>	70	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'CAGIVA'	]);
        DB::table('marcas')->insert(['id' =>	71	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'CALOI'	]);
        DB::table('marcas')->insert(['id' =>	72	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'DAELIM'	]);
        DB::table('marcas')->insert(['id' =>	73	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'DERBI'	]);
        DB::table('marcas')->insert(['id' =>	74	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'DUCATI'	]);
        DB::table('marcas')->insert(['id' =>	75	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'EMME'	]);
        DB::table('marcas')->insert(['id' =>	76	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'GAS GAS'	]);
        DB::table('marcas')->insert(['id' =>	77	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'HARLEY-DAVIDSON'	]);
        DB::table('marcas')->insert(['id' =>	78	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'HARTFORD'	]);
        DB::table('marcas')->insert(['id' =>	79	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'HERO'	]);
        DB::table('marcas')->insert(['id' =>	80	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'HONDA'	]);
        DB::table('marcas')->insert(['id' =>	81	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'HUSABERG'	]);
        DB::table('marcas')->insert(['id' =>	82	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'HUSQVARNA'	]);
        DB::table('marcas')->insert(['id' =>	85	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'KAWASAKI'	]);
        DB::table('marcas')->insert(['id' =>	86	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'KIMCO'	]);
        DB::table('marcas')->insert(['id' =>	87	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'KTM'	]);
        DB::table('marcas')->insert(['id' =>	88	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'L\'AQUILA'	]);
        DB::table('marcas')->insert(['id' =>	89	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'LAVRALE'	]);
        DB::table('marcas')->insert(['id' =>	90	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'MOTO GUZZI'	]);
        DB::table('marcas')->insert(['id' =>	91	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'MV AGUSTA'	]);
        DB::table('marcas')->insert(['id' =>	92	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'MVK'	]);
        DB::table('marcas')->insert(['id' =>	93	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'ORCA'	]);
        DB::table('marcas')->insert(['id' =>	94	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'PEUGEOT'	]);
        DB::table('marcas')->insert(['id' =>	95	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'PIAGGIO'	]);
        DB::table('marcas')->insert(['id' =>	96	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'SANYANG'	]);
        DB::table('marcas')->insert(['id' =>	97	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'SIAMOTO'	]);
        DB::table('marcas')->insert(['id' =>	98	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'SUNDOWN'	]);
        DB::table('marcas')->insert(['id' =>	99	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'SUZUKI'	]);
        DB::table('marcas')->insert(['id' =>	100	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'TRIUMPH'	]);
        DB::table('marcas')->insert(['id' =>	101	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'YAMAHA'	]);
        DB::table('marcas')->insert(['id' =>	102	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'AGRALE'	]);
        DB::table('marcas')->insert(['id' =>	103	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'CHEVROLET'	]);
        DB::table('marcas')->insert(['id' =>	104	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'FIAT'	]);
        DB::table('marcas')->insert(['id' =>	105	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'FORD'	]);
        DB::table('marcas')->insert(['id' =>	106	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'GMC'	]);
        DB::table('marcas')->insert(['id' =>	108	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'MARCOPOLO'	]);
        DB::table('marcas')->insert(['id' =>	109	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'MERCEDES-BENZ'	]);
        DB::table('marcas')->insert(['id' =>	110	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'NAVISTAR'	]);
        DB::table('marcas')->insert(['id' =>	111	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'NEOBUS'	]);
        DB::table('marcas')->insert(['id' =>	112	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'PUMA-ALFA'	]);
        DB::table('marcas')->insert(['id' =>	113	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'SAAB-SCANIA'	]);
        DB::table('marcas')->insert(['id' =>	114	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'SCANIA'	]);
        DB::table('marcas')->insert(['id' =>	115	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'VOLKSWAGEN'	]);
        DB::table('marcas')->insert(['id' =>	116	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'VOLVO'	]);
        DB::table('marcas')->insert(['id' =>	117	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BUELL'	]);
        DB::table('marcas')->insert(['id' =>	118	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'KASINSKI'	]);
        DB::table('marcas')->insert(['id' =>	119	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'TRAXX'	]);
        DB::table('marcas')->insert(['id' =>	120	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Walk'	]);
        DB::table('marcas')->insert(['id' =>	121	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'CICCOBUS'	]);
        DB::table('marcas')->insert(['id' =>	122	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'IVECO'	]);
        DB::table('marcas')->insert(['id' =>	123	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Bugre'	]);
        DB::table('marcas')->insert(['id' =>	125	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'SSANGYONG'	]);
        DB::table('marcas')->insert(['id' =>	126	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'MIZA'	]);
        DB::table('marcas')->insert(['id' =>	127	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'LOBINI'	]);
        DB::table('marcas')->insert(['id' =>	128	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'FYM'	]);
        DB::table('marcas')->insert(['id' =>	129	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'KAHENA'	]);
        DB::table('marcas')->insert(['id' =>	130	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BRAVA'	]);
        DB::table('marcas')->insert(['id' =>	131	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'AMAZONAS'	]);
        DB::table('marcas')->insert(['id' =>	132	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'FOX'	]);
        DB::table('marcas')->insert(['id' =>	133	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'GREEN'	]);
        DB::table('marcas')->insert(['id' =>	134	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'SHINERAY'	]);
        DB::table('marcas')->insert(['id' =>	135	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'WUYANG'	]);
        DB::table('marcas')->insert(['id' =>	136	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'CHANA'	]);
        DB::table('marcas')->insert(['id' =>	137	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'DAYANG'	]);
        DB::table('marcas')->insert(['id' =>	138	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'HAOBAO'	]);
        DB::table('marcas')->insert(['id' =>	139	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'LERIVO'	]);
        DB::table('marcas')->insert(['id' =>	140	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Mahindra'	]);
        DB::table('marcas')->insert(['id' =>	141	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'JIAPENG VOLCANO'	]);
        DB::table('marcas')->insert(['id' =>	142	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'DAYUN'	]);
        DB::table('marcas')->insert(['id' =>	143	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'GARINNI'	]);
        DB::table('marcas')->insert(['id' =>	144	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'WALKBUS'	]);
        DB::table('marcas')->insert(['id' =>	145	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'DAFRA'	]);
        DB::table('marcas')->insert(['id' =>	146	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'Malaguti'	]);
        DB::table('marcas')->insert(['id' =>	147	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'EFFA'	]);
        DB::table('marcas')->insert(['id' =>	148	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'Lon-V'	]);
        DB::table('marcas')->insert(['id' =>	149	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Fibravan'	]);
        DB::table('marcas')->insert(['id' =>	150	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BRP'	]);
        DB::table('marcas')->insert(['id' =>	151	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'JONNY'	]);
        DB::table('marcas')->insert(['id' =>	152	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'HAFEI'	]);
        DB::table('marcas')->insert(['id' =>	153	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'GREAT WALL'	]);
        DB::table('marcas')->insert(['id' =>	154	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'JINBEI'	]);
        DB::table('marcas')->insert(['id' =>	155	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'BUENO'	]);
        DB::table('marcas')->insert(['id' =>	156	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'MINI'	]);
        DB::table('marcas')->insert(['id' =>	157	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'smart'	]);
        DB::table('marcas')->insert(['id' =>	158	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'IROS'	]);
        DB::table('marcas')->insert(['id' =>	159	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'LANDUM'	]);
        DB::table('marcas')->insert(['id' =>	160	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'MRX'	]);
        DB::table('marcas')->insert(['id' =>	161	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'CHERY'	]);
        DB::table('marcas')->insert(['id' =>	162	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'Benelli'	]);
        DB::table('marcas')->insert(['id' =>	163	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Wake'	]);
        DB::table('marcas')->insert(['id' =>	164	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'PEGASSI'	]);
        DB::table('marcas')->insert(['id' =>	165	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'TAC'	]);
        DB::table('marcas')->insert(['id' =>	166	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'SINOTRUK'	]);
        DB::table('marcas')->insert(['id' =>	167	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'MG'	]);
        DB::table('marcas')->insert(['id' =>	168	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'LIFAN'	]);
        DB::table('marcas')->insert(['id' =>	170	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Fyber'	]);
        DB::table('marcas')->insert(['id' =>	171	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'LAMBORGHINI'	]);
        DB::table('marcas')->insert(['id' =>	173	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'REGAL RAPTOR'	]);
        DB::table('marcas')->insert(['id' =>	174	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'JOHNNYPAG'	]);
        DB::table('marcas')->insert(['id' =>	175	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'MAGRÃO TRICICLOS'	]);
        DB::table('marcas')->insert(['id' =>	176	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'TARGOS'	]);
        DB::table('marcas')->insert(['id' =>	177	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'JAC'	]);
        DB::table('marcas')->insert(['id' =>	178	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'LIFAN'	]);
        DB::table('marcas')->insert(['id' =>	179	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'EFFA-JMC'	]);
        DB::table('marcas')->insert(['id' =>	180	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'VENTO'	]);
        DB::table('marcas')->insert(['id' =>	181	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'HYUNDAI'	]);
        DB::table('marcas')->insert(['id' =>	182	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'CHANGAN'	]);
        DB::table('marcas')->insert(['id' =>	183	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'SHINERAY'	]);
        DB::table('marcas')->insert(['id' =>	184	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'MAN'	]);
        DB::table('marcas')->insert(['id' =>	185	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'RAM'	]);
        DB::table('marcas')->insert(['id' =>	186	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'RELY'	]);
        DB::table('marcas')->insert(['id' =>	187	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'TIGER'	]);
        DB::table('marcas')->insert(['id' =>	189	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'ASTON MARTIN'	]);
        DB::table('marcas')->insert(['id' =>	190	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'FOTON'	]);
        DB::table('marcas')->insert(['id' =>	191	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'FOTON'	]);
        DB::table('marcas')->insert(['id' =>	192	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'Royal Enfield'	]);
        DB::table('marcas')->insert(['id' =>	193	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'SHACMAN'	]);
        DB::table('marcas')->insert(['id' =>	194	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'MAXIBUS'	]);
        DB::table('marcas')->insert(['id' =>	195	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'Rolls-Royce'	]);
        DB::table('marcas')->insert(['id' =>	196	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'MASCARELLO'	]);
        DB::table('marcas')->insert(['id' =>	197	, 'tipo_veiculo_id' =>	3	, 'descricao' =>	 'DAF'	]);
        DB::table('marcas')->insert(['id' =>	198	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'RIGUETE'	]);
        DB::table('marcas')->insert(['id' =>	199	, 'tipo_veiculo_id' =>	1	, 'descricao' =>	 'GEELY'	]);
        DB::table('marcas')->insert(['id' =>	200	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'MOTORINO'	]);
        DB::table('marcas')->insert(['id' =>	201	, 'tipo_veiculo_id' =>	2	, 'descricao' =>	 'MOTOCAR'	]);


    }
}
