<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>患者情報登録画面</title>
</head>

<body>
   <h1>患者情報登録画面</h1>

   <form action="06kadai_create.php" method="POST">
      <div class="resister-box">
         <div class="right-box">
            <h2>患者基本情報</h2>
            <h3>カルテNo.</h3>
            <input type="text" name="karte">
            <h3>カナ</h3>
            <input type="text" name="kana">
            <h3>名前</h3>
            <input type="text" name="name">
            <h3>年齢</h3>
            <input type="text" name="age">
            <h3>性別</h3>
            <laber><input type="radio" name="sex" value="男">男</laber>
            <laber><input type="radio" name="sex" value="女">女</laber>
            <h3>住所</h3>
            <input type="text" name="address">
         </div>
         <div class="left-box">
            <h2>症例分類</h2>
            <h3>顎間関係</h3>
            <label><input type="radio" name="angle" value="1級">1級</label>
            <label><input type="radio" name="angle" value="2級">2級</label>
            <label><input type="radio" name="angle" value="3級">3級</label>
            <h3>顎堤吸収</h3>
            <label><input type="radio" name="absorption" value="少ない">少ない</label>
            <label><input type="radio" name="absorption" value="中等度">中程度</label>
            <label><input type="radio" name="absorption" value="高度">高度</label>
            <h3>Kennedy分類</h3>
            <label><input type="radio" name="kennedy" value="1級">1級</label>
            <label><input type="radio" name="kennedy" value="2級">2級</label>
            <label><input type="radio" name="kennedy" value="3級">3級</label>
            <label><input type="radio" name="kennedy" value="4級">4級</label>
            <h3>Eichner分類</h3>
            <div class="a-box">
               <label><input type="radio" name="eichner" value="A1">A1</label>
               <label><input type="radio" name="eichner" value="A2">A2</label>
               <label><input type="radio" name="eichner" value="A3">A3</label>
            </div>
            <div class="b-box">
               <label><input type="radio" name="eichner" value="B1">B1</label>
               <label><input type="radio" name="eichner" value="B2">B2</label>
               <label><input type="radio" name="eichner" value="B3">B3</label>
               <label><input type="radio" name="eichner" value="B4">B4</label>
            </div>
            <div class="c-box">
               <label><input type="radio" name="eichner" value="C1">C1</label>
               <label><input type="radio" name="eichner" value="C2">C2</label>
               <label><input type="radio" name="eichner" value="C3">C3</label>
            </div>
            <h3>特記事項</h3>
            <input type="text" name="text">
         </div>
      </div>
      <button>submit</button>
   </form>

   <style>
      body {
         width: 1000px;
         font-family: Roboto, "Yu Gothic Medium", "游ゴシック Medium", YuGothic, "游ゴシック体", "ヒラギノ角ゴ Pro W3", "メイリオ", sans-serif;
         line-height: 1.75;
         font-size: 16px;
         margin: 0 auto;
         text-align: center;
      }

      .resister-box {
         display: flex;
         justify-content: center;
      }
   </style>


</body>

</html>