setwd("/Users/danielpett/Documents/research/electricarchaeo")

library(jsonlite)
library(RCurl)
base <- 'https://finds.org.uk/'

## Set your query up 
# The important parameters for you to include in a search are:
# q/{queryString} - which has your free text or parameterised search e.g. q/gold/broadperiod/BRONZE+AGE
# /thumbnail/1 - ask for records with images
# /format/json - ask for json response
##
url <- "https://finds.org.uk/database/search/results/q/institution%3AIOW/thumbnail/1/format/json"

json <- fromJSON(url)
total <- json$meta$totalResults
results <- json$meta$resultsPerPage
pagination <- ceiling(total/results)
keeps <- c(
  "id", "objecttype", "old_findID",
  "broadperiod", "institution", "imagedir", 
  "filename"
)

data <- json$results

data <- data[,(names(data) %in% keeps)]

for (i in seq(from=2, to=2, by=1)){
  urlDownload <- paste(url, '/page/', i, sep='')
  pagedJson <- fromJSON(urlDownload)
  records <- pagedJson$results
  records <- records[,(names(records) %in% keeps)]
  data <-rbind(data,records)
}
write.csv(data, file='data.csv',row.names=FALSE, na="")

log_con <- file("test.log")

download <- function(data){
    object = data[3]
    record <- data[2]
    
    if (!file.exists(object)){
      dir.create(object)
    }
    URL = "https://finds.org.uk/images/elburnett/SOMDDE847.jpg"
      #paste0(base,data[7],data[6])
    
    exist <- url.exists(URL) 
    
    if(exist == TRUE){
      download.file(URLencode(URL), destfile = paste(object,basename(URL), sep = '/'))
    } else {
      print("That file is a 404")
      message <- paste0(record,"|",URL,"|","404 \n")
      cat(message, file = "test.log", append = TRUE)
    }
}
apply(data, 1, download)





