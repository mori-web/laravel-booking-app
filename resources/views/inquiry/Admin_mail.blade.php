<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>お問い合わせが送信されました</title>
</head>

<body>

  {{ $contact['name'] }}様からお問い合わせの申込みがありました。<br>
  <p>お問い合わせ内容は次のとおりです。</p>

  ーーーーーーーーーーーーーーーーーーーーー
  <p>件名：{{$contact['title']}}</p>
  <p>メールアドレス：{{$contact['email']}}</p>
  <p>希望対応 : {{ $contact['is_contact_speed'] === 0 ? '普通' : '早急' }} </p>
  <p>お問い合わせ内容：{{$contact['message']}}</p>
  ーーーーーーーーーーーーーーーーーーーーー
</body>

</html>