<div id="accountManager">
    <h1><i class="fa-solid fa-user fa-sm"></i> Account management</h1>
    <div class="button-placeholder">
        <div class="new-button" onclick="openNewAccount()">
            <div class="icon-placeholder"><i class="fa-solid fa-user-plus fa-sm"></i></div>
            <div class="info-placeholder">New</div>
        </div>
    </div>
    <div class="title-list">
        <div class="title-placeholder">
            <div class="title" style="padding-right: 10px;">No.</div>
            <div class="title">Account ID</div>
            <div class="title">Account name</div>
            <div class="title">Phone number</div>
            <div class="title">Role</div>
            <div class="title">Status</div>
        </div>
    </div>
    <div class="list">
        <div class="placeholder">
            <div class="info">
                <div class="item">01</div>
                <div class="item">CUS001</div>
                <div class="item">Bùi Hồng Bảo</div>
                <div class="item">0900000000</div>
                <div class="item">CUS</div>
                <div class="item">Available</div>
                <div class="item" onclick="openDetailAccount()"><i class="fa-regular fa-circle-info"></i> </div>
            </div>
        </div>

    </div>
    <div class="modal-placeholder" id="detail-account">
        <div class="modal-box">
            <div class="modal-header">
                <h1><i class="fa-regular fa-square-kanban fa-rotate-270"></i> Account details</h1>
            </div>
            <div class="modal-info">
                <div class="modal-item">
                    <div class="item-header">Account id</div>
                    <div class="item-input"><input type="text" value="CUS001"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Account name</div>
                    <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Email</div>
                    <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Phone number</div>
                    <div class="item-input"><input type="text" value="0900000000"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Address</div>
                    <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Role</div>
                    <div class="item-input"><select name="" id="">
                            <option value="CUS">Customer</option>
                            <option value="EM">Employee</option>
                            <option value="AD">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Account name</div>
                    <div class="item-input"><input type="text" value="baohongbui313"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Password</div>
                    <div class="item-input"><input type="text" value="baobaobuibui"></div>
                </div>
            </div>
            <div class="modal-button">
                <div class="button-layout"></div>
                <div class="button-layout">
                    <div class="edit-button" onclick="openEditAccount()">
                        <div class="icon-placeholder"><i class="fa-solid fa-pen-to-square"></i></div>
                        <div class="info-placeholder">Edit</div>
                    </div>
                    <div class="back-button" onclick="closeDetailAccount()">
                        <div class="icon-placeholder"><i class="fa-solid fa-angle-left"></i></div>
                        <div class="info-placeholder">Back</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-placeholder" id="edit-account">
        <div class="modal-box">
            <div class="modal-header">
                <h1><i class="fa-regular fa-pen-to-square"></i> Edit Account</h1>
            </div>
            <div class="modal-info">
                <div class="modal-item">
                    <div class="item-header">Account id</div>
                    <div class="item-input"><input type="text" value="CUS001"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Account name</div>
                    <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Email</div>
                    <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Phone number</div>
                    <div class="item-input"><input type="text" value="0900000000"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Address</div>
                    <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Role</div>
                    <div class="item-input"><select name="" id="">
                            <option value="CUS">Customer</option>
                            <option value="EM">Employee</option>
                            <option value="AD">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Account name</div>
                    <div class="item-input"><input type="text" value="baohongbui313"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Password</div>
                    <div class="item-input"><input type="text" value="baobaobuibui"></div>
                </div>
            </div>
            <div class="modal-button">
                <div class="button-layout"></div>
                <div class="button-layout">
                    <div class="edit-button">
                        <div class="icon-placeholder"><i class="fa-solid fa-folder-arrow-down"></i></div>
                        <div class="info-placeholder">Save</div>
                    </div>
                    <div class="back-button" onclick="closeEditAccount()">
                        <div class="icon-placeholder"><i class="fa-solid fa-xmark"></i></div>
                        <div class="info-placeholder">Cancel</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-placeholder" id="new-account">
        <div class="modal-box">
            <div class="modal-header">
                <h1><i class="fa-solid fa-user-plus"></i> New Account</h1>
            </div>
            <div class="modal-info">
                <div class="modal-item">
                    <div class="item-header">Account id</div>
                    <div class="item-input"><input type="text" value="CUS001"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Account name</div>
                    <div class="item-input"><input type="text" value="Bùi Hồng Bảo"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Email</div>
                    <div class="item-input"><input type="text" value="buibuibaobao@gmail.com"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Phone number</div>
                    <div class="item-input"><input type="text" value="0900000000"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Address</div>
                    <div class="item-input"><input type="text" value="Ho Chi Minh City"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Role</div>
                    <div class="item-input"><select name="" id="">
                            <option value="CUS">Customer</option>
                            <option value="EM">Employee</option>
                            <option value="AD">Admin</option>
                        </select>
                    </div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Account name</div>
                    <div class="item-input"><input type="text" value="baohongbui313"></div>
                </div>
                <div class="modal-item">
                    <div class="item-header">Password</div>
                    <div class="item-input"><input type="text" value="baobaobuibui"></div>
                </div>
            </div>
            <div class="modal-button">
                <div class="button-layout"></div>
                <div class="button-layout">
                    <div class="edit-button">
                        <div class="icon-placeholder"><i class="fa-solid fa-user-plus"></i></div>
                        <div class="info-placeholder">Add</div>
                    </div>
                    <div class="back-button" onclick="closeNewAccount()">
                        <div class="icon-placeholder"><i class="fa-solid fa-xmark"></i></div>
                        <div class="info-placeholder">Cancel</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>