//Q1

/*
関数は、与えられた値を元に処理を実行し結果を返す命令
*/
function area(r){
    return r*r*3.14;
}

document.write(area(5));
document.write("<br>");
document.write(area(7));
document.write("<br>");
document.write(area(10));
document.write("<br><br>");

//Q2
/*
　大人の人数をad,子どもの人数をchとする
*/
function price(ad,ch){
    return ad*500+ch*200+"円です";
}

document.write("Aグループの合計金額:");
document.write(price(2,4));
document.write("<br>");

document.write("Bグループの合計金額:");
document.write(price(1,5));
document.write("<br>");

document.write("Cグループの合計金額:");
document.write(price(3,7));
document.write("<br>");
