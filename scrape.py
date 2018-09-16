#!/usr/bin/python3

import urllib.request
import json

pb_ids = [("1483741", "7217aa2d"),
          ("2752252","538f188e"),
          ("3045984","086f046d"),
          ("3146788","086f046d"),
          ("3340386","2fe807d2")]

for pb_id, pb_w in pb_ids:
    url = "http://www.podbean.com/api2/public/filesPlays?blogId=%s&query[0][file]=allFile&query[0][w]=%s" % (pb_id, pb_w)
    print(url)
     
    headers = {}
    headers['User-Agent'] = "Mozilla/5.0 (X11; Ubuntu; Linux i686; rv:48.0) Gecko/20100101 Firefox/48.0"
     
    req = urllib.request.Request(url, headers=headers)
    stats = json.loads(urllib.request.urlopen(req).read())
    if stats["code"]==200:
        print(stats["data"]["allFile"])

# pip install soundcloud

import soundcloud

sc_ids = [233389355, 348803795, 435539853, 281511109, 298736809, 429099024, 298845065, 506401386, 289531556, 151682623, 317878409, 375830486, 262784127, 154946609, 376457183, 458916219, 442941321, 417106848, 439176324, 377007923, 80044523, 235122109, 417845544]

client = soundcloud.Client(client_id="LvWovRaJZlWCHql0bISuum8Bd2KX79mb")
for sc_id in sc_ids:
    user = client.get('/users/%d' % sc_id)
    tracks = client.get('/users/%d/tracks' % sc_id)
    print("hei,", user.username, "you have", user.followers_count, "followers and", len(tracks), "tracks")
    for track in tracks:
        try:
            #print(track.title, track.playback_count)
            print(track.title, track.playback_count, track.download_count, track.favoritings_count, track.comment_count)
        except AttributeError:
            print(track.title, "WITH ERRORS")


