<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>患者検索</title>
</head>

<body>
   <form action="06kadai_c_result.php" method="POST">
      <h2>症例検索</h2>
      <p>顎間関係</p>
      <label><input type="radio" name="an" value="1級">1級</label>
      <label><input type="radio" name="an" value="2級">2級</label>
      <label><input type="radio" name="an" value="3級">3級</label>
      <p>顎堤吸収</p>
      <label><input type="radio" name="ab" value="少ない">少ない</label>
      <label><input type="radio" name="ab" value="中等度">中程度</label>
      <label><input type="radio" name="ab" value="高度">高度</label>
      <p>Kennedy分類</p>
      <label><input type="radio" name="ken" value="1級">1級</label>
      <label><input type="radio" name="ken" value="2級">2級</label>
      <label><input type="radio" name="ken" value="3級">3級</label>
      <label><input type="radio" name="ken" value="4級">4級</label>
      <p>Eichner分類</p>
      <div class="a-box">
         <label><input type="radio" name="ei" value="A1">A1</label>
         <label><input type="radio" name="ei" value="A2">A2</label>
         <label><input type="radio" name="ei" value="A3">A3</label>
      </div>
      <div class="b-box">
         <label><input type="radio" name="ei" value="B1">B1</label>
         <label><input type="radio" name="ei" value="B2">B2</label>
         <label><input type="radio" name="ei" value="B3">B3</label>
         <label><input type="radio" name="ei" value="B4">B4</label>
      </div>
      <div class="c-box">
         <label><input type="radio" name="ei" value="C1">C1</label>
         <label><input type="radio" name="ei" value="C2">C2</label>
         <label><input type="radio" name="ei" value="C3">C3</label>
      </div>
      <p>フリーワード検索</p>
      <input type="text" name="free">
      <button>検索</button>
   </form>

   <style>
      body {
         background-color: #F1F1F2;
         margin: 0 auto;
         color: #5D535E;
      }

      form {
         margin-left: 600px;
      }
   </style>



</body>

</html>