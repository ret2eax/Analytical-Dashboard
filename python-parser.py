
# coding: utf-8

# In[17]:


#!/usr/bin/python
# -*- coding: utf-8 -*-

import requests
from requests.packages.urllib3.exceptions import InsecureRequestWarning
from ast import literal_eval
import json
import pprint 

requests.packages.urllib3.disable_warnings(InsecureRequestWarning)

def main():
    pp = pprint.PrettyPrinter(indent=4)
    base = requests.get("https://192.168.1.230:8834/scans/107",
                         headers={
                            'Accept': 'application/json', 
                            'Content-type': 'application/json',
                            'X-ApiKeys': 'accessKey=88ec91a1e4a54925ba36afbf9ca7ef40149466c10e609de2253d4e8fa99f2e05; secretKey=353b24944027ea64cbf85ce5bf75d0db5f6f67014598e4568062d00b51d5e675;',
                         }, 
                         verify=False
            )

    txt = base.content
    # with open("php-array.txt") as a:
    #     txt = a.read()
    #     txt = txt[:-1]

    
    data = json.loads(txt.decode("utf-8"))
    # data.keys()
    hosts_data = data['hosts']
    
    results = []
#     pp.pprint(data)
#     print(data.keys())
#     pp.pprint(data.keys())
#     pp.pprint(data['vulnerabilities'])
    for host in hosts_data:
        results.append({"hostname": host['hostname'], "Severity": host["severity"]})
#         print("".join((str(host['hostname']), "=>Severity:", str(host["severity"]))))
    #     print(host['severity'])
    results = sorted(results, key=lambda k: k['Severity'], reverse=True)
#     vulnerabilities = sorted(data['vulnerabilities'], key=lambda k: k['count'], reverse=True)[:10]
#     pp.pprint(results)
#     pp.pprint(vulnerabilities)
#print(str(results).strip('[]'))
#    pp.pprint(str(results))
    #results = json.dumps(results, ensure_ascii=False)
    data = ""
    for e in results:
        data += str(e) + ";"
    
    
    print(json.dumps(data))
    
main()


# In[16]:


#pp.pprint(data["vulnerabilities"])


# In[ ]:





