<template>
   <div class="chart-container">
     <canvas id="myRatingServices"></canvas>
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
              text: 'Trade Ratings for Services'
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
      methods: {
        chartConstructor(chartType, chartData, chartOptions) {
          const chartElement = $('#myRatingServices');
          const chart = new Chart(chartElement, {
            type: chartType,
            data: chartData,
            options: chartOptions,
          });
        },

        /*

        */
        GetDetailedServiceRating(response){
          let chartData={
            labels: response.labels.split(','),
            datasets: [
            {
              label: "Service Value Fairness",
              data:  response.fairness.split(','),
              backgroundColor: "rgba(201, 64, 64)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Service Offer vs Delivered",
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
              backgroundColor: "rgba(18, 107, 186)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Honesty Level",
              data:  response.honesty.split(','),
              backgroundColor: "rgba(130, 8, 176)",
              borderColor: "#000000",
              lineTension: 0,
            },                        
            ]};
          this.chartConstructor(this.chartType, chartData, this.chartOptions);
        }
      },
      mounted() {
        axios.get(localStorage['URLroot'] + '/GetDetailedServiceRating').then(response => (this.GetDetailedServiceRating(response.data)));
      },          
  }
</script>