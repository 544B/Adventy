<?php

$aryEvent = array( 
	'1' => array(
		'question'	=> 'クリスマスケーキの準備はできた？',
		'tags'		=> 'クリスマスケーキ',
		),
	'2' => array(
		'question'	=> 'クリスマスディナーのメニューは考えた？',
		'tags'		=> 'クリスマスディナー',
		),
	'3' => array(
		'question'	=> 'クリスマスコンサートとかいってみない？',
		'tags'		=> 'クリスマスコンサート',
		),
	'4' => array(
		'question'	=> 'サンタクロースへのお願いはきまった？',
		'tags'		=> 'サンタクロース',
		),
	'5' => array(
		'question'	=> 'クリスマスカードはもう送ったかな？',
		'tags'		=> 'クリスマスカード',
		),
	'6' => array(
		'question'	=> 'ツリーのオーナーメントの飾りつけはできた？',
		'tags'		=> 'ツリーオーナメント',
		),
	'7' => array(
		'question'	=> 'パーティに誰を呼ぶかきめた？',
		'tags'		=> 'クリスマスパーティ',
		),
	'8' => array(
		'question'	=> 'クリスマスミサはどこの教会にいく？',
		'tags'		=> 'クリスマスミサ',
		),
	'9' => array(
		'question'	=> 'シャンパンは何にするかきめた？',
		'tags'		=> 'シャンパン',
		),
	'10' => array(
		'question'	=> 'クリスマスリースは玄関に飾った？',
		'tags'		=> 'クリスマスリース',
		),
	'11' => array(
		'question'	=> 'クリスマスのお部屋の飾りつけどうする？',
		'tags'		=> 'クリスマス飾り付け',
		),
	'12' => array(
		'question'	=> 'クリスマスソングは何うたう？',
		'tags'		=> 'クリスマスソング',
		),
	'13' => array(
		'question'	=> 'どこのクリスマスマーケットにいく？',
		'tags'		=> 'クリスマスマーケット',
		),
	'14' => array(
		'question'	=> 'クリスマスの映画何かみたいね、きめた？',
		'tags'		=> 'クリスマス映画',
		),
	'15' => array(
		'question'	=> 'クリスマスのデートはどこにいくかきめた？',
		'tags'		=> 'クリスマスデート',
		),
	'16' => array(
		'question'	=> 'クリスマスのワインの銘柄きめた？',
		'tags'		=> 'ワイン',
		),
	'17' => array(
		'question'	=> 'シュトーレンはもう焼いたかしら？',
		'tags'		=> 'シュトーレン',
		),
	'18' => array(
		'question'	=> 'クリスマスコフレ買った？',
		'tags'		=> 'クリスマスコフレ',
		),
	'19' => array(
		'question'	=> 'クリスマスキャンドルの準備はできた？',
		'tags'		=> 'クリスマスキャンドル',
		),
	'20' => array(
		'question'	=> 'クリスマスイルミネーションみにいこう！',
		'tags'		=> 'クリスマスイルミネーション',
		),
	'21' => array(
		'question'	=> 'クリスマスターキーはいい感じに焼けたかな？',
		'tags'		=> 'クリスマスターキー',
		),
	'22' => array(
		'question'	=> 'くるみわり人形もかざりたいよね？',
		'tags'		=> 'くるみ割り人形',
		),
	'23' => array(
		'question'	=> 'パーティのゲームは決めたかな？',
		'tags'		=> 'クリスマスゲーム',
		),
	'24' => array(
		'question'	=> 'クリスマスのお天気はどうかな、雪降るかな？',
		'tags'		=> 'ホワイトクリスマス',
		),
	'25' => array(
		'question'	=> 'さあ、すべての準備はできた！Happy Christmas!',
		'tags'		=> 'クリスマス',
		),

	);

parse_str($_SERVER['QUERY_STRING'],$aryQuery);
$date = $aryQuery['d'];

$json_value	= json_encode( $aryEvent[$date] );

header( 'Content-Type: text/javascript; charset=utf-8' );
echo $json_value;
?>
