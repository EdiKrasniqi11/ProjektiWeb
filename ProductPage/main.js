var pointer=0;
function postReview(){
    var reviewArray = [];
    reviewArray[pointer++]=document.getElementById('reviewSection').value;
    console.log(reviewArray[pointer-1]);
    document.getElementById('reviewSection').value = "";
}
