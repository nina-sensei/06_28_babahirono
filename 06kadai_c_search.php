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
      <label><input type="radio" name="absorption" value="少ない">少ない</label>
      <label><input type="radio" name="absorption" value="中等度">中程度</label>
      <label><input type="radio" name="absorption" value="高度">高度</label>
      <p>Kennedy分類</p>
      <label><input type="radio" name="kennedy" value="1級">1級</label>
      <label><input type="radio" name="kennedy" value="2級">2級</label>
      <label><input type="radio" name="kennedy" value="3級">3級</label>
      <label><input type="radio" name="kennedy" value="4級">4級</label>
      <p>Eichner分類</p>
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
      <p>フリーワード検索</p>
      <input type="text" name="free">
      <button>検索</button>
   </form>

</body>

</html>