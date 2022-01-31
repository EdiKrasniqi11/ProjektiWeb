var index1=0;
var index2=1;
var index3=2;
var images=[];
images[0]='../Images/Acer.jpg';
images[1]='../Images/Apple.jpg';
images[2]='../Images/Dell.png';
images[3]='../Images/HP.png';
images[4]='../Images/Lenovo.png';

function forward(){
    if(index1 < images.length-1){
        index1++;
    }
    else{
        index1=0;
    }
    if(index2 < images.length-1){
        index2++;
    }
    else{
        index2=0;
    }
    if(index3 < images.length-1){
        index3++;
    }
    else{
        index3=0;
    }
    document.getElementById('company1').src = images[index1];
    document.getElementById('company2').src = images[index2];
    document.getElementById('company3').src = images[index3];
}
function backward(){
    if(index1 > 0){
        index1--;
    }
    else{
        index1=images.length-1;
    }
    if(index2 > 0){
        index2--;
    }
    else{
        index2=images.length-1;
    }
    if(index3 > 0){
        index3--;
    }
    else{
        index3=images.length-1;
    }
    document.getElementById('company1').src = images[index1];
    document.getElementById('company2').src = images[index2];
    document.getElementById('company3').src = images[index3];
}