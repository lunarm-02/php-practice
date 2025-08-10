fetch('customers.php')
    .then(res => res.json())
    .then(data => {
        const ul = document.getElementById('customer-list');
        data.forEach(c => {
            const li = document.createElement('li');
            li.textContent = c.name;
            ul.appendChild(li);
        });
    });