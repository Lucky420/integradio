mv eesti-podcastid.html eesti-podcastid.html~
wget https://podcastid.ee/eesti-podcastid/ -O eesti-podcastid.html
grep td-post-cat eesti-podcastid.html | grep https | sed -E 's/.*(a href=")([^\"]*)(.*)/\2/g' > list.txt
cat list.txt | xargs -n 1 wget -O - | grep -B 4 -P '\tRSS' > rss-list.txt
echo "================================="
grep http rss-list.txt | sed -E 's/.*(a href=")([^\"]*)(.*)/\2/g'
