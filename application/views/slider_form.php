   <div class="container">
                    <div class="row">
                        <div class="col-md-5">                        
                            <div class="row bg_header">
                                <ul class="tabs_services">
                                    <li><a id="1" class="switcher set2">Calculator</a></li>
                                    <li><a id="2" class="switcher set2">Buying</a></li>          
                                    <li><a id="3" class="switcher set2">Selling</a></li>
                                    <li><a id="4" class="switcher set2">Renting</a></li>                                    
                                </ul>
                                
                                <div class="clearfix"></div>
                                <div class="switcher-panel"></div> 

                                <!-- 1-content -->
                                <div id="1-content" class="switcher-content set2 show">
                                    <div class="search_box calculator">
                                        <form action="http://html.iwthemes.com/fullstate/php/calculator.php" id="calculator">
                                          <label>Calculate Your Propertie</label>
                                            <div>                                                
                                                <input type="number" required placeholder="Price Propertie" name="price">
                                            </div> 
                                            <div>                                                
                                                <input type="number" required placeholder="Down payment" name="payment">
                                            </div> 
                                            <div>                                                
                                                <select name="interest">
                                                    <option>Interest Rate</option>                                  
                                                    <option value="1.39">1.39 %</option>
                                                    <option value="2">2%</option>
                                                    <option value="3">3%</option>              
                                                </select>
                                            </div> 
                                            <div>                                                
                                                <select name="months">
                                                    <option>Months</option>                                  
                                                    <option>36</option>
                                                    <option>48</option>
                                                    <option>64</option>  
                                                    <option>180</option>              
                                                </select>
                                            </div>                                                                               
                                            <div>
                                                <input type="submit" class="button" value="Calcule">
                                            </div> 
                                        </form>   
                                        <div id="result_calculator"></div>    
                                     </div>            
                                </div>
                                <!-- End 1-content -->

                                <!-- 2-content -->
                                <div id="2-content" class="switcher-content set2">
                                   <div class="search_box">
                                        <form action="http://html.iwthemes.com/fullstate/properties.html">
                                            <div class="">
                                                <label>Search</label>
                                                <input type="text" required>
                                            </div>
                                            <div>
                                                <label>Location</label>
                                                <select name="location">
                                                    <option value="">-- Select city --</option>
                                                     <option value="0" selected="selected">New York</option>
                                                     <option value="1">Los Angeles</option>
                                                     <option value="2">Chicago</option>
                                                     <option value="3">Miami</option>
                                                     <option value="4">San Francisco</option>
                                                     <option value="5">Boston</option>
                                                     <option value="6">Philadelphia</option>
                                                     <option value="7">Dallas</option>                    
                                                 </select>
                                            </div>
                                            <div>
                                                <label>Price Range</label>                                     
                                                <select name="pricing">
                                                      <option>View all</option>                                  
                                                    <option value="info_price">0 - 300.000</option>
                                                    <option value="info_price">300.000 - 500.000</option>
                                                    <option value="info_price">500.000 - 800.000</option>
                                                    <option value="info_price">800.000 - 1.000.000</option>
                                                    <option value="info_price">10.000.000 +</option>    
                                                </select>
                                            </div>
                                            <div>
                                                <label>Area</label>
                                                <select name="area">
                                                    <option>View all</option>
                                                    <option value="info_area">0 - 60 m²</option>
                                                    <option value="info_area">60 m² - 90 m²</option>
                                                    <option value="info_area">90 m² - 150 m²</option>
                                                    <option value="info_area">150 m² - 240 m²</option>
                                                    <option value="info_area">240 m² - 360 m²</option>
                                                    <option value="info_area">360 m² - 480 m²</option>
                                                    <option value="info_area">480 m² - 600 m²</option>
                                                    <option value="info_area">More 600 m²</option>
                                                </select>
                                            </div>
                                            <div>
                                                <input type="submit" class="button" value="Search">
                                            </div> 
                                        </form>                               
                                    </div>   
                                </div>
                                <!-- End 1-content -->

                                <!-- 3-content -->
                                <div id="3-content" class="switcher-content set2">
                                   <div class="search_box">
                                        <form action="http://html.iwthemes.com/fullstate/properties.html">
                                            <div>
                                                <label>Search</label>
                                                <input type="text" required>
                                            </div>
                                            <div>
                                                <label>Location</label>
                                                <select name="location">
                                                    <option value="">-- Select city --</option>
                                                     <option value="0" selected="selected">New York</option>
                                                     <option value="1">Los Angeles</option>
                                                     <option value="2">Chicago</option>
                                                     <option value="3">Miami</option>
                                                     <option value="4">San Francisco</option>
                                                     <option value="5">Boston</option>
                                                     <option value="6">Philadelphia</option>
                                                     <option value="7">Dallas</option>                    
                                                 </select>
                                            </div>
                                            <div>
                                                <label>Price Range</label>                                     
                                                <select name="pricing">
                                                      <option>View all</option>                                  
                                                    <option value="info_price">0 - 300.000</option>
                                                    <option value="info_price">300.000 - 500.000</option>
                                                    <option value="info_price">500.000 - 800.000</option>
                                                    <option value="info_price">800.000 - 1.000.000</option>
                                                    <option value="info_price">10.000.000 +</option>    
                                                </select>
                                            </div>
                                            <div>
                                                <label>Area</label>
                                                <select name="area">
                                                    <option>View all</option>
                                                    <option value="info_area">0 - 60 m²</option>
                                                    <option value="info_area">60 m² - 90 m²</option>
                                                    <option value="info_area">90 m² - 150 m²</option>
                                                    <option value="info_area">150 m² - 240 m²</option>
                                                    <option value="info_area">240 m² - 360 m²</option>
                                                    <option value="info_area">360 m² - 480 m²</option>
                                                    <option value="info_area">480 m² - 600 m²</option>
                                                    <option value="info_area">More 600 m²</option>
                                                </select>
                                            </div>
                                            <div>
                                                <input type="submit" class="button" value="Search">
                                            </div> 
                                        </form>                               
                                    </div>   
                                </div>
                                <!-- End 3-content -->

                                <!-- 4-content -->
                                <div id="4-content" class="switcher-content set2">
                                   <div class="search_box">
                                        <form action="http://html.iwthemes.com/fullstate/properties.html">
                                            <div>
                                                <label>Search</label>
                                                <input type="text" required>
                                            </div>
                                            <div>
                                                <label>Location</label>
                                                <select name="location">
                                                    <option value="">-- Select city --</option>
                                                     <option value="0" selected="selected">New York</option>
                                                     <option value="1">Los Angeles</option>
                                                     <option value="2">Chicago</option>
                                                     <option value="3">Miami</option>
                                                     <option value="4">San Francisco</option>
                                                     <option value="5">Boston</option>
                                                     <option value="6">Philadelphia</option>
                                                     <option value="7">Dallas</option>                    
                                                 </select>
                                            </div>
                                            <div>
                                                <label>Price Range</label>                                     
                                                <select name="pricing">
                                                      <option>View all</option>                                  
                                                    <option value="info_price">0 - 300.000</option>
                                                    <option value="info_price">300.000 - 500.000</option>
                                                    <option value="info_price">500.000 - 800.000</option>
                                                    <option value="info_price">800.000 - 1.000.000</option>
                                                    <option value="info_price">10.000.000 +</option>    
                                                </select>
                                            </div>
                                            <div>
                                                <label>Area</label>
                                                <select name="area">
                                                    <option>View all</option>
                                                    <option value="info_area">0 - 60 m²</option>
                                                    <option value="info_area">60 m² - 90 m²</option>
                                                    <option value="info_area">90 m² - 150 m²</option>
                                                    <option value="info_area">150 m² - 240 m²</option>
                                                    <option value="info_area">240 m² - 360 m²</option>
                                                    <option value="info_area">360 m² - 480 m²</option>
                                                    <option value="info_area">480 m² - 600 m²</option>
                                                    <option value="info_area">More 600 m²</option>
                                                </select>
                                            </div>
                                            <div>
                                                <input type="submit" class="button" value="Search">
                                            </div> 
                                        </form>                               
                                    </div>   
                                </div>
                                <!-- End 4-content -->
                            </div>       
                        </div>
                    </div>
                </div> 