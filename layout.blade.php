<style>

#wrap {width: 100%;}
header {width: 100%; height: 150px; background: #81c784;}
aside {float: left; width: 30%; height: 700px; background: #66bb6a;}
section {float: left; width: 40%; height: 700px; background: #4caf50;}
article {float: left; width: 30%; height: 700px; background: #43a047;}
footer {clear: both; width: 100%; height: 150px; background: #388e3c;}

/* 화면 너비 0 ~ 1200px */
@media (max-width: 1220px){
    aside {width: 40%;}
    section {width: 60%;}
    article {width: 100%; height: 300px;}
}
/* 화면 너비 0 ~ 768px */
@media (max-width: 768px){
    aside {width: 100%; height: 300px;}
    section {width: 100%; height: 300px;}
}
/* 화면 너비 0 ~ 480px */
@media (max-width: 480px){
    header {height: 300px;}
    aside {height: 200px;}
    section {height: 200px;}
}
</style>
<div id="wrap">
    <header></header>
    <aside></aside>
    <section>{{$slot}}</section>
    <article></article>
    <footer></footer>
</div>


