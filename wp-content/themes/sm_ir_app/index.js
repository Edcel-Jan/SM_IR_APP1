fetch('http://localhost/sm-ir-app/wp-json/wp/v2/pages')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    console.log(data);
  });

fetch('http://localhost/sm-ir-app/wp-json/wp/v2/sm-investments-corp')
  .then((response) => {
    return response.json();
  })
  .then((data) => {
    console.log(data);
  });