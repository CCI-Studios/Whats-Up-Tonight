/* columns */var CCI=window.CCI||{};CCI.Columns=new Class({container:null,selector:null,columns:null,height:null,offset:null,initialize:function(a,b){if(!a)return;this.container=a;this.selector=b;this.columns=this.container.getElements(this.selector);this.offset=30;this.height=0;var c,d,e;e=0;for(c=0,d=this.columns.length;c<d;c++){e=this.columns[c].getSize().y-this.offset;e>this.height&&(this.height=e)}this.columns.setStyle("height",this.height)}});