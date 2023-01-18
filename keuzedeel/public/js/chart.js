function show(url, id, title) {
    fetch('http://localhost:8000/api/data/' + url)
        .then((response) => response.json())
        .then((data) => {
            const ctx = document.getElementById(id);
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['30-40', '41-50', '51-61'],
                    datasets: [{
                        label: 'Man',
                        data: [data.men._30_40, data.men._41_50, data.men._51_65],
                        borderColor: '#FFFFFF',
                        backgroundColor: '#36A2EB',
                        borderWidth: 1
                    },
                    {
                        label: 'Vrouw',
                        data: [data.women._30_40, data.women._41_50, data.women._51_65],
                        borderColor: '#FFFFFF',
                        backgroundColor: '#FF6384',
                        borderWidth: 1
                    },

                    ]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        title: {
                            display: true,
                            text: title
                        }
                    }
                }
            });
        });
}
show();