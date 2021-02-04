<template>
   <div class="chart-container">
     <canvas id="myRatingSkills"></canvas>
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
              text: 'Trade Ratings for Skills'
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
          const chartElement = $('#myRatingSkills');
          const chart = new Chart(chartElement, {
            type: chartType,
            data: chartData,
            options: chartOptions,
          });
        },

        /*

        */
        GetDetailedSkillRating(response){
          let chartData={
            labels: response.labels.split(','),
            datasets: [
            {
              label: "Skill Value Fairness",
              data:  response.fairness.split(','),
              backgroundColor: "rgba(122, 207, 232)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Skill Offer vs Delivered",
              data:  response.description.split(','),
              backgroundColor: "rgba(148, 148, 148)",
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
              backgroundColor: "rgba(245, 161, 26)",
              borderColor: "#000000",
              lineTension: 0,
            },
            {
              label: "Honesty Level",
              data:  response.honesty.split(','),
              backgroundColor: "rgba(61, 89, 120)",
              borderColor: "#000000",
              lineTension: 0,
            },                        
            ]};
          this.chartConstructor(this.chartType, chartData, this.chartOptions);
        }
      },
      mounted() {
        axios.get(localStorage['URLroot'] + '/GetDetailedSkillRating').then(response => (this.GetDetailedSkillRating(response.data)));
      },          
  }
</script>