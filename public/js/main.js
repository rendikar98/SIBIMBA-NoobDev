d3.json("/barchart/Data").then(function(data) {

	// console.log(data.dosen_pembimbing_2)

	// Aggregate data by condition
	var DosPem1Data = d3.group(data, d => d.dosen_pembimbing_1);
	var DosPem2Data = d3.group(data, d => d.dosen_pembimbing_2);

	var DosPemCount1 = Array.from(DosPem1Data, ([DosPem, data]) => ({ DosPem: DosPem, count: data.length }));
	var DosPemCount2 = Array.from(DosPem2Data, ([DosPem, data]) => ({ DosPem: DosPem, count: data.length }));

	var mergedData = DosPemCount1.concat(DosPemCount2);

	// console.log(mergedData)

	const DosPemCount = Object.values([...DosPemCount1, ...DosPemCount2].reduce((acc, cur) => {
		if (!acc[cur.DosPem]) {
			acc[cur.DosPem] = { DosPem: cur.DosPem, count: 0 };
		}
		acc[cur.DosPem].count += cur.count;
		return acc;
	}, {}));

	const getFilters = () => {
		let s = {
			"sex": "pendamping"

		};
		$('.btn-group .active input').each(function (d, i) {
			if($(this).hasClass('sex')){
				s.sex = $(this).attr('value')
			}
		});
		console.log(s);
		return s;
	};

	getFilters();

	// Sort data by count in descending order
	DosPemCount.sort((a, b) => d3.descending(a.count, b.count));
	// console.log(conditionCount)

// 	// Define chart dimensions
// 	var margin = { top: 20, right: 20, bottom: 200, left: 40 },
// 		width = 960 - margin.left - margin.right,
// 		height = 600 - margin.top - margin.bottom;

// 	// Define x and y scales
// 	var x = d3.scaleBand()
// 		.range([0, width])
// 		.padding(0.2)
// 		.domain(DosPemCount.map(d => d.DosPem));
// 	var y = d3.scaleLinear()
// 		.range([height, 0])
// 		.domain([0, d3.max(DosPemCount, d => d.count)]);



// 	// Create chart container and set dimensions
// 	var svg = d3.select("body").append("svg")
// 		.attr("width", width + margin.left + margin.right)
// 		.attr("height", height + margin.top + margin.bottom)
// 		.append("g")
// 		.attr("transform", "translate(" + margin.left + "," + margin.top + ")");

// 	// Create x-axis
// 	svg.append("g")
// 		.attr("class", "x-axis")
// 		.attr("transform", "translate(0," + height + ")")
// 		.call(d3.axisBottom(x));

// 	// Create y-axis
// 	svg.append("g")
// 		.attr("class", "y-axis")
// 		.call(d3.axisLeft(y));

// // Create bars
// svg.selectAll(".bar")
// .data(DosPemCount)
// .enter().append("rect")
// .attr("class", "bar")
// .attr("x", d => x(d.DosPem))
// .attr("width", x.bandwidth())
// .attr("y", d => y(d.count))
// .attr("height", d => height - y(d.count))


// 	// Rotate x-axis labels
// 	svg.selectAll(".x-axis text")  
// 		.style("text-anchor", "end")
// 		.attr("dx", "-.8em")
// 		.attr("dy", ".15em")
// 		.attr("transform", "rotate(-65)");
		
// 	var tooltip = d3.select("body").append("div")
// 		.attr("class", "tooltip")
// 		.style("position", "absolute")
// 		.style("z-index", "10")
// 		.style("visibility", "hidden");

console.log(DosPemCount)
let barchart = new Barchart({ parentElement: '#vis'}, DosPemCount);

barchart.updateVis();

}).catch(function(error) {
	console.log(error);
});
