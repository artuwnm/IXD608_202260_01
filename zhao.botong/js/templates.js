

const listItemTemplate = templater(o=>`
<a class="col-xs-12 col-md-4" href="product_item.php?id=${o.id}">
    <figure class="figure product ">
    	<div class="flex-stretch">
    		<img src="img/${o.thumbnail}" alt="">
    	</div>
            <figcaption class="flex-none">
                <div class="name">${o.name}</div>
                <div class="price">&dollar;${o.price.toFixed(2)}</div>
            </figcaption>
    </figure>
</a>
`);