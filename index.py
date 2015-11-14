import datetime
import time
from mod_python import Cookie,apache,Session,util
import urllib2
def index(req):

   util.redirect(req,"index.php")
