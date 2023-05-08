function bmiCalculator(event){
    event.preventDefault();
    let userWeight=document.getElementById("weightInput").value;
    let userHeight=document.getElementById("heightInput").value;
    let BMI=(userWeight/(userHeight*userHeight));
    document.getElementById("result").value = BMI.toFixed(2);

}