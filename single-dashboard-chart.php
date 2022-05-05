<!DOCTYPE html>
<html>
<head>	
	<?php wp_head();?>
	
	<script src="https://cdn.tailwindcss.com"></script>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bai+Jamjuree:wght@400;500;700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<link href="https://cdn.jsdelivr.net/gh/lazywasabi/thai-web-fonts@6/fonts/Anuphan/Anuphan.css" rel="stylesheet" />

	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js" integrity="sha512-QSkVNOCYLtj73J4hbmVoOV6KVZuMluZlioC+trLpewV8qMjsWqlIQvkn1KGX2StWvPMdWGBqim1xlC8krl1EKQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	
</head>
<body <?php body_class(); ?>>
	<div class="mt-12 mx-auto flex justify-center">
		<div class="dashboard">
			<div class="flex justify-between items-center">
				<p class="text-2xl font-bold">Multimedia Programming</p>
				<button class="download-csv p-2 text-white text-xs">Download CSV</button>
			</div>
<!-- 			<div class="img_dashboard mt-4 flex justify-center items-center">
				<h1 class="text-5xl font-bold text-white">Dashboard</h1>
			</div> -->
			<div class="course_board mt-4 flex justify-center">
				<div class="board_num flex py-28">
					<div class="participants text-center text-white mr-4 ml-6">
						<p class="text-5xl pb-1 font-bold">280</p>
						<p class="text-lg">Participants</p>
					</div>
					<div class="units text-center text-white mr-4">
						<p class="text-5xl pb-1 font-bold">7</p>
						<p class="text-lg">Units</p>
					</div>
					<div class="activities text-center text-white mr-4">
						<p class="text-5xl pb-1 font-bold">15</p>
						<p class="text-lg">Activities</p>
					</div>
					<div class="lessons text-center text-white mr-4">
						<p class="text-5xl pb-1 font-bold">8</p>
						<p class="text-lg">Lessons</p>
					</div>
					<div class="exercises text-center text-white">
						<p class="text-5xl pb-1 font-bold">9</p>
						<p class="text-lg">Exercises</p>
					</div>
				</div>

				<div class="chart_container pt-2" style="height:10vh; width:20vw">
					<canvas id="myChart"></canvas>
				</div>
			</div>

			<!-- Exercise -->
			<div class="exercise_board mt-4 p-4">
				<p class="text-lg font-bold pb-3">Exercise</p>
				<div class="flex items-center">
					<div class="table-exer pr-1 overflow-auto">
						<table class="table-fixed">
							<thead>
								<tr class="head_exercise_board">
									<th>Name</th>
									<th>Units</th>
									<th>ส่งงาน</th>
									<th>ไม่ส่งงาน</th>
									<th>เปอร์เซนต์คนส่งงาน</th>
									<th>ตรงเวลา</th>
									<th>ไม่ตรงเวลา</th>
									<th>คะแนนสูงสุด</th>
									<th>คะแนนต่ำสุด</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									<td>Introduce yourself</td>
									<td>1</td>
									<td>280</td>
									<td>0</td>
									<td>100%</td>
									<td>100%</td>
									<td>0%</td>
									<td>10</td>
									<td>10</td>
								</tr>

								<tr class="text-center">
									<td>CSS Background</td>
									<td>2</td>
									<td>280</td>
									<td>0</td>
									<td>100%</td>
									<td>100%</td>
									<td>0%</td>
									<td>10</td>
									<td>8</td>
								</tr>
								<tr class="text-center">
									<td>CSS Color</td>
									<td>3</td>
									<td>280</td>
									<td>0</td>
									<td>100%</td>
									<td>100%</td>
									<td>0%</td>
									<td>10</td>
									<td>9</td>
								</tr>
								<tr class="text-center">
									<td>Basic Website</td>
									<td>4</td>
									<td>280</td>
									<td>4</td>
									<td>100%</td>
									<td>100%</td>
									<td>5%</td>
									<td>10</td>
									<td>9</td>
								</tr>
								<tr class="text-center">
									<td>Grid, Display</td>
									<td>5</td>
									<td>280</td>
									<td>3</td>
									<td>100%</td>
									<td>100%</td>
									<td>2%</td>
									<td>10</td>
									<td>9</td>
								</tr>
								<tr class="text-center">
									<td>Isometric</td>
									<td>6</td>
									<td>280</td>
									<td>3</td>
									<td>100%</td>
									<td>100%</td>
									<td>4%</td>
									<td>10</td>
									<td>8</td>
								</tr>
								<tr class="text-center">
									<td>Animation</td>
									<td>7</td>
									<td>280</td>
									<td>8</td>
									<td>100%</td>
									<td>100%</td>
									<td>10%</td>
									<td>10</td>
									<td>7</td>
								</tr>
								<tr class="text-center">
									<td>PHP</td>
									<td>8</td>
									<td>280</td>
									<td>5</td>
									<td>100%</td>
									<td>100%</td>
									<td>8%</td>
									<td>10</td>
									<td>8</td>
								</tr>
								<tr class="text-center">
									<td>Wordpress</td>
									<td>9</td>
									<td>280</td>
									<td>1</td>
									<td>100%</td>
									<td>100%</td>
									<td>1%</td>
									<td>10</td>
									<td>10</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="chart_container pt-2" style="width: 40vw">
						<canvas id="lineChart"></canvas>
					</div>
				</div>
			</div>

			<!-- Participants -->
			<div class="participants_board mt-4 p-4">
				<p class="text-lg font-bold pb-3">Participants</p>
				<div class="flex">
					<div class="table-exer pr-1 overflow-auto">
						<table class="table-fixed">
							<thead>
								<tr class="head_exercise_board">
									<th>Name</th>
									<th>รหัสนักศึกษา</th>
									<th>คะแนนรวม</th>
									<th>งานที่ส่ง</th>
									<th>งานที่ไม่ส่ง</th>
									<th>ตรงเวลา</th>
									<th>ไม่ตรงเวลา</th>
								</tr>
							</thead>
							<tbody>
								<tr class="text-center">
									<td>Arin Auycharoen</td>
									<td>61070001</td>
									<td>70%</td>
									<td>7</td>
									<td>2</td>
									<td>70%</td>
									<td>30%</td>
								</tr>
								<tr class="text-center">
									<td>Jakkrapat Suwanno</td>
									<td>61070002</td>
									<td>100%</td>
									<td>9</td>
									<td>0</td>
									<td>100%</td>
									<td>0%</td>
								</tr>
								<tr class="text-center">
									<td>Phawinee Thongbor</td>
									<td>61070003</td>
									<td>90%</td>
									<td>9</td>
									<td>1</td>
									<td>90%</td>
									<td>10%</td>
								</tr>
								<tr class="text-center">
									<td>Pathiphol Kanjanajit</td>
									<td>61070004</td>
									<td>89%</td>
									<td>9</td>
									<td>2</td>
									<td>88%</td>
									<td>12%</td>
								</tr>
								<tr class="text-center">
									<td>Pimwaree Kromsuriyasak</td>
									<td>61070005</td>
									<td>75%</td>
									<td>7</td>
									<td>3</td>
									<td>60%</td>
									<td>40%</td>
								</tr>
								<tr class="text-center">
									<td>Siriporn Jongjit</td>
									<td>61070006</td>
									<td>95%</td>
									<td>9</td>
									<td>1</td>
									<td>100%</td>
									<td>0%</td>
								</tr>
								<tr class="text-center">
									<td>Soipachara Mekalai</td>
									<td>61070007</td>
									<td>50%</td>
									<td>5</td>
									<td>4</td>
									<td>90%</td>
									<td>10%</td>
								</tr>
								<tr class="text-center">
									<td>Thanawat Kemwatcharalert</td>
									<td>61070008</td>
									<td>98%</td>
									<td>9</td>
									<td>0</td>
									<td>95%</td>
									<td>5%</td>
								</tr>
								<tr class="text-center">
									<td>Tiwat Parkpoompaisal</td>
									<td>61070009</td>
									<td>30%</td>
									<td>3</td>
									<td>6</td>
									<td>90%</td>
									<td>10%</td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="chart_container pt-2" style="width: 40vw">
						<canvas id="particChart"></canvas>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		let myChart = document.getElementById('myChart').getContext('2d');
		let lineChart = document.getElementById('lineChart');
		let particChart = document.getElementById('particChart');

		let massPopChart = new Chart(myChart, {
			type:'doughnut',
			data:{
				labels:['Participants', 'Units', 'Activities', 'Lessons', 'Exercises'],
				datasets:[{
					label: 'Population',
					data:[
					280,
					5,
					15,
					8,
					7
					],
					backgroundColor:[
					'#82F4C7',
					'#DBA0FF',
					'#7BD7FF',
					'#FFCC80',
					'#FF9898'
					],
					borderWidth:1,
					borderColor:'#fff',
					hoverBorderWidth:2,
					hoverBorderColor:'#333'
				}]
			}
		});

// lineChart
		let masslineChart = new Chart(lineChart, {
			type: 'line',
			data: {
				labels: ["Introduce yourself", "CSS Background","CSS Color", "Basic Website", "Grid, Display", "Isometric", "Animation", "PHP", "Wordpress"],
				datasets: [
				{
					label: "จำนวนคนส่งงาน",
					fill: false,
					lineTension: 0.1,
					backgroundColor: '#82F4C7',
					borderColor: '#82F4C7',
					borderCappStyle: 'butt',
					borderDash: [],
					borderDashOffset: 0.0,
					borderJoinStyle: 'miter',
					pointBorderColor: '#28C7AA',
					pointBackgroundColor: '#28C7AA',
					pointBackgroundWidth: 1,
					pointHoverRadius: 5,
					pointHoverBorderColor: '#82F4C7',
					pointHoverBackgroundColor: '#82F4C7',
					pointHoverBorderWidth: 2,
					poiintRadius: 1,
					pointHitRadius: 20,
					data: ["280", "270", "156", "220", "190", "185", "240", "220", "263"]
				},
				{
					label: "เวลาส่งงาน",
					fill: false,
					lineTension: 0.1,
					backgroundColor: '#5AC4F3',
					borderColor: '#5AC4F3',
					borderCappStyle: 'butt',
					borderDash: [],
					borderDashOffset: 0.0,
					borderJoinStyle: 'miter',
					pointBorderColor: '#6B8AF9',
					pointBackgroundColor: '#6B8AF9',
					pointBackgroundWidth: 1,
					pointHoverRadius: 5,
					pointHoverBorderColor: '#5AC4F3',
					pointHoverBackgroundColor: '#5AC4F3',
					pointHoverBorderWidth: 2,
					poiintRadius: 1,
					pointHitRadius: 10,
					data: ["148", "170", "156", "120", "190", "185", "140", "150", "163"]
				},
				{
					label: "คะแนนงาน (100%)",
					fill: false,
					lineTension: 0.1,
					backgroundColor: '#D767DE',
					borderColor: '#D767DE',
					borderCappStyle: 'butt',
					borderDash: [],
					borderDashOffset: 0.0,
					borderJoinStyle: 'miter',
					pointBorderColor: '#A458F9',
					pointBackgroundColor: '#A458F9',
					pointBackgroundWidth: 1,
					pointHoverRadius: 5,
					pointHoverBorderColor: '#D767DE',
					pointHoverBackgroundColor: '#D767DE',
					pointHoverBorderWidth: 2,
					poiintRadius: 1,
					pointHitRadius: 10,
					data: ["100", "85", "95", "99", "98", "86", "76", "88", "100"]
				}
				]
			},
			options: {
				scales: {
					y: {
						min: 0,
						max: 280,
					}
				}
			}
		});

// particChart
	let massparticChart = new Chart(particChart, {
			type: 'bar',
			data: {
				labels: ["61070001", "61070002","61070003", "61070004", "61070005", "61070006", "61070007", "61070008", "61070009"],
				datasets: [
				{
					label: "คะแนนรวม (%)",
					fill: false,
					lineTension: 0.1,
					backgroundColor: '#7BD7FF',
					hoverBackgroundColor: '#D9F3FF',
					data: ["70", "100", "96", "89", "75", "95", "50", "98", "30"]
				},
				{
					label: "งานที่ส่ง (%)",
					fill: false,
					lineTension: 0.1,
					backgroundColor: '#FFA6EB',
					hoverBackgroundColor: '#FFE0F8',
					data: ["70", "90", "90", "90", "70", "90", "50", "90", "30"]
				},
				{
					label: "ส่งงานตรงเวลา (%)",
					fill: false,
					lineTension: 0.1,
					backgroundColor: '#82F4C7',
					hoverBackgroundColor: '#DBFFF1',
					data: ["70", "100", "90", "88", "60", "100", "90", "95", "90"]
				}
				]
			},
			options: {
				scales: {
					y: {
						min: 0,
						max: 100,
					}
				}
			}
		})
</script>

<style>
	body{
		font-family: 'Anuphan', sans-serif; 
		color: var(--color1);
		background-color: #F6F4F9;
	}
	:root {
		--bg1: #EF95F9;
		--color1: #333333;
		--color2: #B2B2B2;
		--darkgreen: #28C7AA;
		--lightgreen: #82F4C7;
		--darkblue: #6B8AF9;
		--lightblue: #5AC4F3;
	}
	.color2 {
		color: var(--color2);
	}
	.dashboard {
		width: 90vw;
	}
	.download-csv {
		background-color: #9A5BED;
		border-radius: 6px;
	}
	/*.img_dashboard {
		border-radius: 6px;
		width: 65vw;
		height: 20vh;
		background-image: linear-gradient(to right, #FDAC30, #FA8398);
		}*/
		.course_board {
			background-color: white;
			border-radius: 6px;
			box-shadow: 2px 2px 10px #DCDAE3;
			width: 90vw;
			height: auto;
		}
		.participants {
			width: 12vw;
			padding: 0.5rem;
			border-radius: 6px; 
			background-image: linear-gradient(to right, #28C7AA, #82F4C7);
		}
		.units {
			width: 12vw;
			padding: 0.5rem;
			border-radius: 6px;
			background-image: linear-gradient(to right, #A458F9, #D767DE);
		}
		.activities {
			width: 12vw;
			padding: 0.5rem;
			border-radius: 6px;
			background-image: linear-gradient(to right, #6B8AF9, #5AC4F3);
		}
		.lessons {
			width: 12vw;
			padding: 0.5rem;
			border-radius: 6px;
			background-image: linear-gradient(to right, #FDAC30, #F4D482);
		}
		.exercises {
			width: 12vw;
			padding: 0.5rem;
			border-radius: 6px;
			background-image: linear-gradient(to right, #FA8496, #FFAAB8);
		}
		.exercise_board,
		.participants_board {
			background-color: white;
			border-radius: 6px;
			box-shadow: 2px 2px 10px #DCDAE3;
			width: 90vw;
			height: 50vh;
		}
		.table-exer {
			width: 50vw;
			height: 40vh;
			font-size: 0.8rem;
		}
		.head_exercise_board {
			background-color: #F4F5F6; 
		}
		th {
			padding: 0.3rem 0rem;
		}
		td {
			padding: 0.5rem 0rem;
			border-bottom: 1px solid #ddd;
		}
		tr:hover {
			background-color: #F4F5F6;
		}
	</style>
	<?php wp_footer() ?>
</body>
</html>