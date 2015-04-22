import urlparse
import sys
import urllib
import json

from pyquery import PyQuery as pq

q = pq(url='http://www.blood.org.tw/Internet/main/index.aspx')
Storage=q('.Storage #StorageHeader a')
imglist=q('.StorageCondition img')
data=[{
      "Taipei":"0",
      "Xinzhu":"0",
      "Taizhong":"0",
      "Tainan":"0",
      "Kaohsiung":"0",
      "Hualien":"0"
      },
      {
      "Taipei":"0",
      "Xinzhu":"0",
      "Taizhong":"0",
      "Tainan":"0",
      "Kaohsiung":"0",
      "Hualien":"0"
      }]

# def getArea(index,node):
# 	name=pq(node)
# 	print name.text().encode('utf-8')
# Storage.each(getArea)
def get(index, node):
    d = pq(node)
    if index==0:
    	data[0]['Taipei']=d.attr('alt').encode('utf-8')
    	data[1]['Taipei']=d.attr('src')
    elif index==1:
    	data[0]['Xinzhu']=d.attr('alt').encode('utf-8')
    	data[1]['Xinzhu']=d.attr('src')
    elif index==2:
    	data[0]['Taizhong']=d.attr('alt').encode('utf-8')
    	data[1]['Taizhong']=d.attr('src')
    elif index==3:
    	data[0]['Tainan']=d.attr('alt').encode('utf-8')
    	data[1]['Tainan']=d.attr('src')
    elif index==4:
    	data[0]['Kaohsiung']=d.attr('alt').encode('utf-8')
    	data[1]['Kaohsiung']=d.attr('src')
    elif index==5:
    	data[0]['Hualien']=d.attr('alt').encode('utf-8')
    	data[1]['Hualien']=d.attr('src')
    
imglist.each(get)

print json.dumps(data)