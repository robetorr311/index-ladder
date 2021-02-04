<template>
   <div>
     <canvas></canvas>
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
      methods: {
        chartConstructor(chartType, chartData, chartOptions) {
          const chartElement = document.querySelector("canvas");
          const chart = new Chart(chartElement, {
            type: chartType,
            data: chartData,
            options: chartOptions,
          });
        },

        /*

        */
        GetProductRating(response){
          let chartData={
            labels: response.labels.split(','),
            datasets: [
            {
              label: "Value Fairness",
              data:  response.fairness.split(','),
              backgroundColor: "rgba(18, 107, 186)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Photos vs Actual",
              data:  response.description.split(','),
              backgroundColor: "rgba(240, 227, 138)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Value vs Utility",
              data:  response.value.split(','),
              backgroundColor: "rgba(64, 171, 64)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Satisfied with trade",
              data:  response.satisfied.split(','),
              backgroundColor: "rgba(201, 64, 64)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Honesty Level",
              data:  response.honesty.split(','),
              backgroundColor: "rgba(56, 153, 219)",
              borderColor: "#000000",
              lineTension: 0,
            },                        
            ]};
          this.chartConstructor(this.chartType, chartData, this.chartOptions);
        }
      },
      mounted() {
        axios.get(localStorage['URLroot'] + '/GetProductRating').then(response => (this.GetProductRating(response.data)));
      },          
  }
</script>