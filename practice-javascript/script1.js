//Q1 
for(var i=1;i<=5;i++){
    document.write("★");
}

document.write("<br><br>");

//Q2
for(var a=1;a<=2;a++){
    for(var a2=1;a2<=3;a2++){
        document.write("★");
       
    }
    document.write("<br>");
}

document.write("<br><br>");

//Q3
for(var b=1;b<=2;b++){
    for(var b2=1;b2<=5;b2++){
        document.write("☆");
    }
    document.write("<br>");
}

document.write("<br><br>");

//Q4
for(var c=1;c<=4;c++){
    for(var c2=1;c2<=5;c2++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br><br>");


//Q5
for(var d=1;d<=4;d++){
    for(var d2=1;d2<=3;d2++){
        document.write("★");
    }
    document.write("<br>");
}

document.write("<br><br>");

//Q6
//回数が偶数の時だけ☆、それ以外は★を表示して、3回まで繰り返して改行
//これを2回まで繰り返す
for(var e=1;e<=3;e++){

    for(var e2=1;e2<=3;e2++){
        if(e2%2==0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>")
}

document.write("<br><br>");

//Q7
for(var f=1;f<=4;f++){

    for(var f2=1;f2<=5;f2++){
        if(f2%2==0){
            document.write("☆");
        }else{
            document.write("★");
        }
    }
    document.write("<br>");
}

document.write("<br><br>");

//Q8
//まず入れ子になっている処理は　n回まで★の表示を繰り返す
//nは外側のfor文の処理回数と同じなので3回目の処理なら★は３回表示される
//外側のfor文が５回行われる
for(var g=1;g<=5;g++){
    for(var g2=1;g2<=g;g2++) {
        document.write("★");
    }
    document.write("<br>");
}

//line row