const settings = {
	"async": true,
	"crossDomain": true,
	"url": "https://covid-193.p.rapidapi.com/statistics?country=Indonesia",
	"method": "GET",
	"headers": {
		"X-RapidAPI-Key": "199c2a1115mshd1780cb021bdf50p14b2e0jsn0b8f87464aaf",
		"X-RapidAPI-Host": "covid-193.p.rapidapi.com"
	}
};

$.ajax(settings).done(function (response) {
	$('#tanggal').html(response['response'][0]['day'])
	$('#jam').html(response['response'][0]['time'])
	$('#sembuh').html(response['response'][0]['cases']['recovered'])
	$('#meninggal').html(response['response'][0]['deaths']['total'])
	$('#pertambahan-harian').html(response['response'][0]['cases']['new'])
	$('#critical').html(response['response'][0]['cases']['critical'])
});