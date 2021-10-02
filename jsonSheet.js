var sf = "https://docs.google.com/spreadsheets/d/1vSrV1kVyhVCBn-5eZ1AmrZfbV5xNeTRUUJN3ZxDnXaM/gviz/tq?tqx=out:json";
$.ajax({url: sf, type: 'GET', dataType: 'text'})
    .done(function (data) {
        const r = data.match(/google\.visualization\.Query\.setResponse\(([\s\S\w]+)\)/);
        if (r && r.length == 2) {
            const obj = JSON.parse(r[1]);
            const table = obj.table;
            const header = table.cols.map(({label}) => label);
            const rows = table.rows.map(({c}) => c.map(({v}) => v));
            console.log(header);
            console.log(rows);
            rows.forEach(p => {
                const card =
                    `<div class="card" style="display: inline-block;">
                         <img src="${p[2]}" class="card-img-top img-fluid" style=" padding-left:1rem; padding-right:1rem;"/>
                        <div class="card-body">
                                <h5 class="card-title">${p[0]}</h5>
                                    <hr>
                                <p class="card-text"> ${p[1]}</p>
                                    <p class="fs-6" style="margin-top:3rem;"><b>${p[3]}</b></p>
                                <div class="d-grid gap-2">
                                <a class="btn btn-danger">ADD TO CART</a>
                                </div>
                        </div>
                        </div>`
                const ele = document.getElementById("cardku");
                ele.innerHTML += card;
                // document.body.appendChild(ele.firstChild);
            })
        }
    })
    .fail((e) => console.log(e.status));
