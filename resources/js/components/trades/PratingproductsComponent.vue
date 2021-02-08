<template>
   <div class="chart-container">
     <canvas id="myPRatingProducts"></canvas>
   </div>
</template>
<script>

import { Bar } from 'vue-chartjs'

  export default {
    extends: Bar,
    data() {
      return {
          chartType: 'bar',
          chartOptions: {
            title: {
              display: true,
              text: 'Trade Ratings for Products'
            },            
            scales: {
              xAxes: [
              {
                stacked: false,
                gridLines: { display: false },
              },
              ],
              yAxes: [
              {
                ticks: {
                  min: 0,
                  stepSize: 1,
                  callback: function(value, index, values) {
                    if (value % Math.round(values[0] / 6) == 0) {
                      return value;
                    } else if (value === 0) {
                      return value;
                    }
                  },
                },
              },
              ],
            },
            maintainAspectRatio: false,
            legend: {
              labels: {
                boxWidth: 10,
              },
              position: "bottom",
            },
          },
        };
      },
      props: [
        'UserValue',  
      ],    
      methods: {
        chartConstructor(chartType, chartData, chartOptions) {
          const chartElement = $('#myPRatingProducts');
          const chart = new Chart(chartElement, {
            type: chartType,
            data: chartData,
            options: chartOptions,
          });
        },
        GetProductRating(response){
          let lab=response.labels.split(',');
          let fairness=response.fairness.split(',');
          let description=response.description.split(',');
          let utility=response.value.split(',');
          let satisfied=response.satisfied.split(',');
          let honesty=response.honesty.split(',');
          let chartData={
            labels: lab,
            datasets: [
            {
              label: "Value Fairness",
              data:  fairness,
              backgroundColor: "rgba(18, 107, 186)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Photos vs Actual",
              data:  description,
              backgroundColor: "rgba(240, 227, 138)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Value vs Utility",
              data:  utility,
              backgroundColor: "rgba(64, 171, 64)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Satisfied with trade",
              data:  satisfied,
              backgroundColor: "rgba(201, 64, 64)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Honesty Level",
              data:  honesty,
              backgroundColor: "rgba(56, 153, 219)",
              borderColor: "#000000",
              lineTension: 0,
            },                        
            ]};
          this.chartConstructor(this.chartType, chartData, this.chartOptions);
        }
      },
      mounted() {
        axios.get(localStorage['URLroot'] + '/GetUProductRating/' + this.UserValue).then(response => (this.GetProductRating(response.data)));
      },          
  }
</script>