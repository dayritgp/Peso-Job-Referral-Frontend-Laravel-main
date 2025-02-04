// Sample address data in JSON format
var addressData1 = {
    "Sarangani": {
        "Alabel": ["Alegria", "Baluntay", "Datal Anggas"],
        "Glan": ["Batulaki", "Big Margus", "Burias"],
        // Add more provinces and cities as needed
      },
      "South Cotabato": {
      "General Santos City": ["Calumpang", "Mabuhay", "Tambler"],
      "Koronadal": [ "Barrio Uno", "Carpenter Hill", "Esperanza"],
      // Add more states and cities as needed
    }
    
    // Add more countries and their respective states/provinces as needed
  };
  
  // Function to populate options for the state select based on the selected country
  function updateProvinceOptions1() {
    var provinceSelect = document.getElementById("provinceSelect1"); //country
    var CitySelect = document.getElementById("CitySelect1"); //state
    var selectedProvince = provinceSelect.value;
    
    // Clear existing options
    CitySelect.innerHTML = "<option value=''>Select Municipality/City</option>";
    
    if (selectedProvince && addressData1[selectedProvince]) {
      var states = Object.keys(addressData[selectedProvince]);
      states.forEach(function(state) {
        var option = document.createElement("option");
        option.text = state;
        option.value = state;
        CitySelect.add(option);
      });
    }
  }
  
  // Function to populate options for the city select based on the selected state
  function updateCityOptions1() {
    var provinceSelect = document.getElementById("provinceSelect1");
    var CitySelect = document.getElementById("CitySelect1");
    var BrgySelect = document.getElementById("BrgySelect1");
    var selectedProvince = provinceSelect.value;
    var selectedCity = CitySelect.value;
    
    // Clear existing options
    BrgySelect.innerHTML = "<option value=''>Select Barangay</option>";
    
    if (selectedProvince && selectedCity && addressData1[selectedProvince] && addressData1[selectedProvince][selectedCity]) {
      var cities = addressData1[selectedProvince][selectedCity];
      cities.forEach(function(city) {
        var option = document.createElement("option");
        option.text = city;
        option.value = city;
        BrgySelect.add(option);
      });
    }
  }
  
  // Populate options for the country select
  var provinceSelect = document.getElementById("provinceSelect1");
  Object.keys(addressData).forEach(function(country) {
    var option = document.createElement("option");
    option.text = country;
    option.value = country;
    provinceSelect.add(option);
  });
  