<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせを受け付けました</title>
</head>

<body>
  {{ $contact['name'] }}様<br>
  この度はお問い合わせいただきありがとうございます。<br>
  下記の内容で受付いたしました。<br>
  担当者よりご連絡いたしますので、今しばらくお待ちくださいませ。<br>
  <p>お問い合わせ内容は次のとおりです。</p>
  ーーーーーーーーーーーーーーーーーーーーー
  <p>件名：{{$contact['title']}}</p>
  <p>メールアドレス：{{$contact['email']}}</p>
  <p>希望対応 : {{ $contact['is_contact_speed'] === false ? '普通' : '早急' }} </p>
  <p>お問い合わせ内容：{{$contact['message']}}</p>
  ーーーーーーーーーーーーーーーーーーーーー
</body>

</html>