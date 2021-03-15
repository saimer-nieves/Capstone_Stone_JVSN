<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>







<ul>
  <li style="height:100px;width:100px;float:left; overflow:hidden;">
    <div style="height:500px; background-color:black;">
    </div>
  </li>
</ul>
<ul>
  <li style="height:100px; width:100px; float:left; ">
    <div style="height:100px;width:500px; background-color:red;">
    </div>
  </li>
  <li style="height:100px;overflow:hidden; width:100px; float:left;">
    <div style="height:500px; background-color:blue;">
    </div>
  </li>
  <li style="height:100px;overflow:hidden; width:100px; float:left;">
    <div style="height:500px; background-color:green;">
    </div>
  </li>
</ul>
    
</body>
</html>





<script>
  (() => {
    const frag = document.createDocumentFragment();
    const list = document.querySelector("ul");
    const items = list.querySelectorAll("li");
    const sortedList = Array.from(items).sort(function(a, b) {
      const c = a.textContent,
        d = b.textContent;
      return c < d ? -1 : c > d ? 1 : 0;
    });
    for (let item of sortedList) {
      frag.appendChild(item);
    }  
    list.appendChild(frag);
  })();


</script>
