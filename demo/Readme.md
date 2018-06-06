To see how it works, just run a container and jump inside:

```bash
git clone https://github.com/kolyadin/php-pht.git
cd php-pht/demo
docker run -it --rm -v $(pwd):/var/www/ kolyadin/php-pht /bin/bash
```

Then run php script in background and start monitoring cpu load:

```bash
php cpuload.php &
top -H
```

You'll see that php script executes in parallel threads and threads number equals $threadsCount var in cpuload.php