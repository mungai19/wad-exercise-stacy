<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Virtual Showroom - tanaka_hardware</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
            padding: 20px;
            background: #fff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        h1 {
            color: #663399;
            text-align: center;
        }
        .items {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
        }
        .item {
            flex: 1 1 calc(33.333% - 10px);
            box-sizing: border-box;
            margin: 10px;
            padding: 10px;
            background: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
            text-align: center;
        }
        .item img {
            max-width: 100%;
            height: auto;
        }
        .item button {
            margin-top: 10px;
            padding: 10px;
            background-color: brown;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        @media (max-width: 768px) {
            .items{
                flex: 1 1 calc(50% - 10px);
            }
        }
        @media (max-width: 480px) {
            .item {
                flex: 1 1 100%;
            }
            .menu ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.menu ul li {
    margin-left: 20px;
}

.menu ul li a {
    text-decoration: none;
    color: #fff;
}
.navigation-bar {
    display: flex;
    justify-content: space-between;
    
    width: 100%;
    padding: 20px;
    background: rgba(0, 0, 0, 0.7);
        }
    }
    </style>
</head>
<body>
    <div class="navigation bar">
        <div class="icon">
            <h1 class="logo">tanaka_hardware</h12>
        
        </div>
        <div class="menu">
            <ul>
                <li><a href ="virtual-showroom.html">VIRTUAL SHOWROOM</a></li>
                <li><a href ="index.html.html">HOME</a></li>
                <li><a href ="about.html">ABOUT</a></li>
                <li><a href ="services.html">SERVICES</a></li>
                <li><a href ="contacts.html">CONTACTS</a></li>
                <li><a href ="account.html">CART</a></li>
                <li><a href ="wishlist.html"> WISHLIST</a></li>

            </ul>
        </div>"
        <br>
    <div class="container">
        <h1>Virtual Showroom</h1>
        <div class="item">
            <label> HARMMERS.</label>
            <div class="items">
                
                <img src="https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.in%2FHandle_Available-Different-Sizes_500-Kg_Pack-Delivery%2Fdp%2FB07CVBCFYR&psig=AOvVaw0OjwgJ5XJmSQDaSiFoxHyO&ust=1720853074016000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCMjI25PzoIcDFQAAAAAdAAAAABAQ.jpg" 
                alt="HARMMERS">
                <span>Harmmers</span>
                <button onclick="addToWishlist('1', 'HARMMERS', 'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.amazon.in%2FHandle_Available-Different-Sizes_500-Kg_Pack-Delivery%2Fdp%2FB07CVBCFYR&psig=AOvVaw0OjwgJ5XJmSQDaSiFoxHyO&ust=1720853074016000&source=images&cd=vfe&opi=89978449&ved=0CBEQjRxqFwoTCMjI25PzoIcDFQAAAAAdAAAAABAQ.jpg')">Add to Wishlist</button>
            </div>

            <div class="item">
                <img src="https://www.google.com/imgres?q=electrical%20hardware%20tools&imgurl=http%3A%2F%2Fwww.hoomeilife.com%2Fstatic%2Fupload%2Fimage%2F20220826%2F1661480626954262.jpg&imgrefurl=http%3A%2F%2Fwww.hoomeilife.com%2Findex.php%2Fcontent-979&docid=8zxTPV2MtYJJDM&tbnid=yT4H9OUw19j9IM&vet=12ahUKEwj69sGl9aCHAxVHRKQEHaHGBH4QM3oECBsQAA..i&w=2559&h=2559&hcb=2&ved=2ahUKEwj69sGl9aCHAxVHRKQEHaHGBH4QM3oECBsQAA" alt="Harmmers set complete with chairs">
                <span>Dela-Vista Harmmers</span>
                <button onclick="addToWishlist('1', 'Dela Vista Harmmers', 'images/dela vista Harmmers and chairs.jpg')">Add to Wishlist</button>

            </div>

            <div class="item">
                
                <img src="images\Macrobe Harmmers set.jpg"  alt="sophisticated Harmmer set with black finishings">
                <span>Harmmers</span>
                <button onclick="addToWishlist('1', 'B.Beauty Harmmers', 'images\Macabre brown Harmmer set.jpg')">Add to Wishlist</button>
            </div>


            <div class="item">
                <img src="images\red riding hood Harmmers.jpg" alt="Majestic Harmmers">
                <span>Majestic Harmmers</span>
                <button onclick="addToWishlist('1', 'Elegant Harmmers')">Add to Wishlist</button>
            </div>
            <div class="item">
                <img src="images\thinker's Wrench.jpg" alt="Tool Set">
                <span>Wrench</span>
                <button onclick="addToWishlist('1', 'e Tool set', 'images\thinkers Wrench.jpg')">Add to Wishlist</button>
            </div>
            <label>Tools</label>
            <div class="item">
            
                <img src="images\Tool Set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div><div class="item">
                <img src="images\Tool set.jpg" alt="Tool set">
                <span>Tool set</span>
                <button onclick="addToWishlist('1', 'Tool set', 'images\Tool set.jpg')">Add to Wishlist</button>
            </div>
            <!-- Add more items as needed -->
        </div>
    </div>

    <script>
        async function addToWishlist(userId, itemName, itemImage) {
            const response = await fetch('/api/wishlist', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ userId, itemName, itemImage })
            });
            const result = await response.json();
            if (result.success) {
                alert('Item added to wishlist!');
            } else {
                alert('Please log in to add items to your wishlist.');
            }
        }
    </script>
</body>
</html>
