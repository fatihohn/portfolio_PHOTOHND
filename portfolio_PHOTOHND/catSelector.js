const upCat = document.getElementById("up_cat");

const ind = upCat.selectedIndex;
// const opt = document.getElementsByTagName("option")[ind].value;
const opt = upCat.value;
// const opt = upCat.value;
const lowCatShow = document.querySelector("#low_cat_show");


upCat.onchange =  function() {
    let x = document.getElementById("up_cat").value;
  //   document.getElementById("low_cat_show").innerHTML = "You selected: " + x;
  if (x == "portraits") {
          lowCatShow.innerHTML = `<label for="low_cat">하위 카테고리:</label>
      <select class="low_cat_portraits" name="low_cat">
          <option value="portraits">Portraits</option>
      </select>`;
      } else if (x == "stillObjects") {
          lowCatShow.innerHTML = `<label for="low_cat">하위 카테고리:</label>
      <select class="low_cat_stillObjects" name="low_cat">
          <option value="food">food</option>
          <option value="interiorProduct">interiorProduct</option>
      </select>`;
      } else if (x == "performance") {
          lowCatShow.innerHTML = `<label for="low_cat">하위 카테고리:</label>
      <select class="low_cat_performance" name="low_cat">
          <option value="dance">dance</option>
          <option value="music">music</option>
      </select>`;
      } else if (x == "natureLandscape") {
          lowCatShow.innerHTML = `<label for="low_cat">하위 카테고리:</label>
      <select class="low_cat_natureLandscape" name="low_cat">
          <option value="life">life</option>
          <option value="macro">macro</option>
          <option value="landscape">landscape</option>
      </select>`;
      } else if (x == "events") {
          lowCatShow.innerHTML = `<label for="low_cat">하위 카테고리:</label>
      <select class="low_cat_events" name="low_cat">
          <option value="events">events</option>
      </select>`;
      } else if (x == "artistic") {
          lowCatShow.innerHTML = `<label for="low_cat">하위 카테고리:</label>
      <select class="low_cat_artistic" name="low_cat">
          <option value="abstract">abstract</option>
          <option value="documentary">documentary</option>
      </select>`;
      } else {
          console.log("error");
      }
  }