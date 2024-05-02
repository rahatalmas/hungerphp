fetch("http://localhost/hungerappphp/models/foodModel.php")
.then(response=>{
    return response.json();
})
.then(data=>{
    console.log(data);
    elementCreator(data);
})


let foodcard = `
<div class="food-card">
<img class="food-card-img" style="width: 100%;" src="https://w0.peakpx.com/wallpaper/138/212/HD-wallpaper-naruto-uzumaki-alright-this-is-ichiraku-ramen-my-favorite-spot-in-konoha-i-ordered-us-some-ramen-so-dig-in-twitter.jpg"/>
<div class="food-card-description">
    <h3>ichurika ramen</h3>
    <p>ramen please.</p>
    <h4>leaf village</h4>
    <h4>price: 250</h4>
    <button class="food-card-add-btn">Add To Card</button>
</div>
</div>
`
