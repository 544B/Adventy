<?php

$aryEvent = array( 
	'1' => array(
		'question'	=> 'クリスマスケーキの準備はできた？',
		'tags'		=> 'クリスマスケーキ',
		'etags'		=> 'Christmas cake',
		),
	'2' => array(
		'question'	=> 'クリスマスディナーのメニューは考えた？',
		'tags'		=> 'クリスマスディナー',
		'etags'		=> 'Christmas dinner',
		),
	'3' => array(
		'question'	=> 'クリスマスコンサートとかいってみない？',
		'tags'		=> 'クリスマスコンサート',
		'etags'		=> 'Christmas concert',
		),
	'4' => array(
		'question'	=> 'サンタクロースへのお願いはきまった？',
		'tags'		=> 'サンタクロース',
		'etags'		=> 'Santa Claus',
		),
	'5' => array(
		'question'	=> 'クリスマスカードはもう送ったかな？',
		'tags'		=> 'クリスマスカード',
		'etags'		=> 'Christmas card',
		),
	'6' => array(
		'question'	=> 'ツリーのオーナーメントの飾りつけはできた？',
		'tags'		=> 'ツリーオーナメント',
		'etags'		=> 'Christmas tree ornament',
		),
	'7' => array(
		'question'	=> 'パーティに誰を呼ぶかきめた？',
		'tags'		=> 'クリスマスパーティ',
		'etags'		=> 'Christmas party',
		),
	'8' => array(
		'question'	=> 'クリスマスミサはどこの教会にいく？',
		'tags'		=> 'クリスマスミサ',
		'etags'		=> 'Christmas worship',
		),
	'9' => array(
		'question'	=> 'シャンパンは何にするかきめた？',
		'tags'		=> 'シャンパン',
		'etags'		=> 'Christmas champagne ',
		),
	'10' => array(
		'question'	=> 'クリスマスリースは玄関に飾った？',
		'tags'		=> 'クリスマスリース',
		'etags'		=> 'Christmas wreath',
		),
	'11' => array(
		'question'	=> 'クリスマスのお部屋の飾りつけどうする？',
		'tags'		=> 'クリスマス飾り付け',
		'etags'		=> 'Christmas ornament',
		),
	'12' => array(
		'question'	=> 'クリスマスソングは何うたう？',
		'tags'		=> 'クリスマスソング',
		'etags'		=> 'Christmas songs',
		),
	'13' => array(
		'question'	=> 'どこのクリスマスマーケットにいく？',
		'tags'		=> 'クリスマスマーケット',
		'etags'		=> 'Christmas market',
		),
	'14' => array(
		'question'	=> 'クリスマスの映画何かみたいね、きめた？',
		'tags'		=> 'クリスマス映画',
		'etags'		=> 'Christmas movie',
		),
	'15' => array(
		'question'	=> 'クリスマスのデートはどこにいくかきめた？',
		'tags'		=> 'クリスマスデート',
		'etags'		=> 'Christmas date',
		),
	'16' => array(
		'question'	=> 'クリスマスのワインの銘柄きめた？',
		'tags'		=> 'ワイン',
		'etags'		=> 'Christmas wine',
		),
	'17' => array(
		'question'	=> 'シュトーレンはもう焼いたかしら？',
		'tags'		=> 'シュトーレン',
		'etags'		=> 'stollen',
		),
	'18' => array(
		'question'	=> 'クリスマスコフレ買った？',
		'tags'		=> 'クリスマスコフレ',
		'etags'		=> 'Christmas cosme',
		),
	'19' => array(
		'question'	=> 'クリスマスキャンドルの準備はできた？',
		'tags'		=> 'クリスマスキャンドル',
		'etags'		=> 'Christmas candle',
		),
	'20' => array(
		'question'	=> 'クリスマスイルミネーションみにいこう！',
		'tags'		=> 'クリスマスイルミネーション',
		'etags'		=> 'Christmas illumination',
		),
	'21' => array(
		'question'	=> 'クリスマスターキーはいい感じに焼けたかな？',
		'tags'		=> 'クリスマスターキー',
		'etags'		=> 'Christmas cake',
		),
	'22' => array(
		'question'	=> 'くるみわり人形もかざりたいよね？',
		'tags'		=> 'くるみ割り人形',
		'etags'		=> 'The Nutcracker',
		),
	'23' => array(
		'question'	=> 'パーティのゲームは決めたかな？',
		'tags'		=> 'クリスマスゲーム',
		'etags'		=> 'Christmas game',
		),
	'24' => array(
		'question'	=> 'クリスマスのお天気はどうかな、雪降るかな？',
		'tags'		=> 'ホワイトクリスマス',
		'etags'		=> 'White Christmas',
		),
	'25' => array(
		'question'	=> 'さあ、すべての準備はできた！Happy Christmas!',
		'tags'		=> 'クリスマス',
		'etags'		=> 'Christmas',
		),

	);

parse_str($_SERVER['QUERY_STRING'],$aryQuery);
$date = $aryQuery['d'];

$json_value	= json_encode( $aryEvent[$date] );
//header不要でした
//header( 'Content-Type: text/javascript; charset=utf-8' );
echo $json_value;
?>
