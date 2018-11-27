$(document).ready(function(){
	$.ajax({
		url: "http://localhost/hms/data.php",
		method: "GET",
		success: function(data) {
			console.log(data);
			var pmonth = [];
			var cnt = [];

			for(var i in data) {
				pmonth.push(data[i].pmonth);
				cnt.push(data[i].cnt);
			}
			var canvas = document.getElementById("mycanvas"); 
			var ctx = canvas.getContext("2d");


			var gradient = ctx.createLinearGradient(0, 0, 0, 600);
			gradient.addColorStop(0, 'rgba(20,244,255,1.00)');
			gradient.addColorStop(1, 'rgba(229,18,255,1.00)');


			// var gradient = ctx.createLinearGradient(0, 0, 0, 400);
		 //    gradient.addColorStop(0, 'rgba(229, 239, 255, 1)');
		 //    gradient.addColorStop(1, '#FFFFFF');

			var chartdata = {
				labels: pmonth,
				datasets : [
					{
						label: 'Patient Visits',
		                backgroundColor : gradient, // Put the gradient here as a fill color
		                borderColor : "#ff6c23",
		                pointBackgroundColor : 'purple',
		                pointBorderColor : "#ff6c23",
		                pointHighlightFill: "#fff",
		                pointHighlightStroke: "#ff6c23",
						data: cnt,
						//backgroundColor: ["red", "blue", "green", "blue", "red", "blue"], 
					}
				]
			};

			var ctx = $("#mycanvas");

			var barGraph = new Chart(ctx, {
				type: 'bar',
				data: chartdata,
				options: {
    scales: {
        yAxes: [{
            ticks: {
                beginAtZero: true
            }
        }]
    }
}
			});
		},
		error: function(data) {
			console.log(data);
		},
	});
});